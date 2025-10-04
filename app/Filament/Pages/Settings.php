<?php
namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Tabs as ComponentsTabs;
use Filament\Schemas\Components\Tabs\Tab as TabsTab;
use Filament\Schemas\Schema;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class Settings extends Page implements HasForms
{
    use InteractsWithForms;

    public $header_logo;

    protected string $view                                        = 'filament.pages.site-settings';
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationLabel                     = 'Site Settings';
    protected static ?string $title                               = 'Site Settings';
    protected static ?int $navigationSort                         = 6;
    public ?array $data                                           = [];

    public function mount(): void
    {
        $settings = Setting::getAllSettings();
        $this->form->fill($this->formatSettingsForForm($settings));
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                ComponentsTabs::make('Settings Tabs')
                    ->tabs([
                        TabsTab::make('General Settings')
                            ->icon('heroicon-o-globe-alt')
                            ->schema([
                                TextInput::make('site_name')
                                    ->label('Site Name')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('site_email')
                                    ->label('Site Email')
                                    ->email()
                                    ->required(),
                                Textarea::make('site_description')
                                    ->label('Site Description')
                                    ->rows(3),

                                FileUpload::make('header_logo')
                                    ->label('Header Logo')
                                    ->image()
                                    ->directory('settings/header')
                                    ->maxSize(2048)
                                    ->helperText('Upload your header logo (max 2MB)')
                                    ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/svg+xml'])
                                    ->preserveFilenames(),
                                FileUpload::make('footer_logo')
                                    ->label('Footer Logo')
                                    ->image()
                                    ->directory('settings/footer')
                                    ->maxSize(2048)
                                    ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/svg+xml'])
                                    ->preserveFilenames(),
                                TextInput::make('footer_copyright')
                                    ->label('Copyright Text')
                                    ->placeholder('© 2024 All rights reserved.'),

                                Repeater::make('social_links')
                                    ->label('Social Media Links')
                                    ->schema([
                                        Select::make('platform')
                                            ->options([
                                                'facebook'  => 'Facebook',
                                                'twitter'   => 'Twitter',
                                                'instagram' => 'Instagram',
                                                'linkedin'  => 'LinkedIn',
                                                'youtube'   => 'YouTube',
                                                'github'    => 'GitHub',
                                            ])
                                            ->required(),

                                        TextInput::make('url')
                                            ->label('Profile URL')
                                            ->url()
                                            ->required()
                                            ->placeholder('https://'),
                                    ])
                                    ->defaultItems(0)
                                    ->columns(2)
                                    ->reorderable()
                                    ->cloneable()
                                    ->collapsible()
                                    ->itemLabel(fn(array $state): ?string => $state['platform'] ?? null),
                                Toggle::make('maintenance_mode')
                                    ->label('Maintenance Mode')
                                    ->helperText('When enabled, the site will be in maintenance mode'),
                            ])
                            ->columns(2),

                        TabsTab::make('Terms & Conditions')
                            ->icon('heroicon-o-document-text')
                            ->schema([
                                Textarea::make('terms_conditions')
                                    ->label('Terms & Conditions Content')
                                    ->helperText('Write your terms and conditions here')
                                    ->rows(15)
                                    ->columnSpanFull(),
                            ]),

                        TabsTab::make('Privacy Policy')
                            ->icon('heroicon-o-shield-check')
                            ->schema([
                                Textarea::make('privacy_policy')
                                    ->label('Privacy Policy Content')
                                    ->helperText('Write your privacy policy here')
                                    ->rows(15)
                                    ->columnSpanFull(),
                            ]),

                        TabsTab::make('FAQs')
                            ->icon('heroicon-o-question-mark-circle')
                            ->schema([
                                Repeater::make('faqs')
                                    ->label('FAQ Items')
                                    ->schema([
                                        TextInput::make('question')
                                            ->label('Question')
                                            ->required()
                                            ->maxLength(255)
                                            ->columnSpanFull(),

                                        Textarea::make('answer')
                                            ->label('Answer')
                                            ->required()
                                            ->rows(3)
                                            ->columnSpanFull(),
                                    ])
                                    ->defaultItems(0)
                                    ->reorderable()
                                    ->cloneable()
                                    ->collapsible()
                                    ->grid(1),
                            ]),
                    ])
                    ->columnSpanFull(),
            ])
            ->statePath('data');
    }

    /**
     * Format settings array for the form
     */
    protected function formatSettingsForForm(array $settings): array
    {
        $formData = [];

        // General Settings
        $formData['site_name']        = $settings['site_name'] ?? 'My Blog';
        $formData['site_description'] = $settings['site_description'] ?? '';
        $formData['site_email']       = $settings['site_email'] ?? 'admin@example.com';
        $formData['header_logo']      = $settings['header_logo'] ?? '';
        $formData['footer_logo']      = $settings['footer_logo'] ?? '';
        $formData['footer_copyright'] = $settings['footer_copyright'] ?? '© ' . date('Y') . ' All rights reserved.';
        $formData['maintenance_mode'] = isset($settings['maintenance_mode']) ? (bool) $settings['maintenance_mode'] : false;

        // Social Links
        $formData['social_links'] = isset($settings['social_links']) ?
        json_decode($settings['social_links'], true) : [];

        // Content
        $formData['terms_conditions'] = $settings['terms_conditions'] ?? '';
        $formData['privacy_policy']   = $settings['privacy_policy'] ?? '';
        $formData['faqs']             = isset($settings['faqs']) ?
        json_decode($settings['faqs'], true) : [];

        return $formData;
    }

    public function save(): void
    {
        try {
            $data = $this->form->getState();

            // Ensure all fields have proper values
            $processedData = [
                'site_name'        => $data['site_name'] ?? '',
                'site_description' => $data['site_description'] ?? '',
                'site_email'       => $data['site_email'] ?? '',
                'header_logo'      => $data['header_logo'] ?? null,
                'footer_logo'      => $data['footer_logo'] ?? null,
                'footer_copyright' => $data['footer_copyright'] ?? '',
                'maintenance_mode' => $data['maintenance_mode'] ?? false,
                'social_links'     => $data['social_links'] ?? [],
                'terms_conditions' => $data['terms_conditions'] ?? '',
                'privacy_policy'   => $data['privacy_policy'] ?? '',
                'faqs'             => $data['faqs'] ?? [],
            ];

            // Process and save settings
            $this->saveSettings($processedData);

            Notification::make()
                ->title('Settings saved successfully!')
                ->success()
                ->send();

        } catch (\Exception $e) {
            Notification::make()
                ->title('Error saving settings!')
                ->body($e->getMessage())
                ->danger()
                ->send();
        }
    }

    /**
     * Save all settings to database
     */
    protected function saveSettings(array $data): void
    {
        $settingsToSave = [
            // General Settings
            'site_name'        => $data['site_name'],
            'site_description' => $data['site_description'],
            'site_email'       => $data['site_email'],
            'maintenance_mode' => $data['maintenance_mode'] ? '1' : '0',
            'footer_copyright' => $data['footer_copyright'],

            // Content
            'terms_conditions' => $data['terms_conditions'],
            'privacy_policy'   => $data['privacy_policy'],
        ];

        // Header Logo - Fixed logic
        if (isset($data['header_logo']) && ! empty($data['header_logo'])) {
            $headerLogoValue = $this->handleFileUpload($data['header_logo'], 'header');
            if ($headerLogoValue) {
                $settingsToSave['header_logo'] = $headerLogoValue;
            }
        } else {
            // Keep existing value if no new upload
            $existingHeaderLogo = Setting::getValue('header_logo', '');
            if ($existingHeaderLogo) {
                $settingsToSave['header_logo'] = $existingHeaderLogo;
            }
        }

        // Footer Logo - Fixed logic
        if (isset($data['footer_logo']) && ! empty($data['footer_logo'])) {
            $footerLogoValue = $this->handleFileUpload($data['footer_logo'], 'footer');
            if ($footerLogoValue) {
                $settingsToSave['footer_logo'] = $footerLogoValue;
            }
        } else {
            // Keep existing value if no new upload
            $existingFooterLogo = Setting::getValue('footer_logo', '');
            if ($existingFooterLogo) {
                $settingsToSave['footer_logo'] = $existingFooterLogo;
            }
        }

        // Handle JSON data
        $settingsToSave['social_links'] = json_encode($data['social_links'] ?? []);
        $settingsToSave['faqs']         = json_encode($data['faqs'] ?? []);

        // Debug: Check what's being saved
        // dd($settingsToSave);

        // Save to database
        foreach ($settingsToSave as $key => $value) {
            Setting::setValue($key, $value);
        }
    }

    /**
     * Handle file upload and return stored path
     */
    protected function handleFileUpload($file, string $type): ?string
    {
        try {
            // If it's already a stored file path, return it
            if (is_string($file) && (str_contains($file, 'storage/') || str_contains($file, 'settings/'))) {
                return $file;
            }

            // If it's a temporary upload, store it
            if ($file instanceof TemporaryUploadedFile) {
                $path = $file->store("settings/{$type}", 'public');
                return 'storage/' . $path; // Remove the leading slash to make it relative
            }

            // If it's an array (from Livewire), get the first file
            if (is_array($file) && count($file) > 0) {
                $firstFile = $file[0];
                if (is_string($firstFile)) {
                    return $firstFile; // Already stored
                }
                if ($firstFile instanceof TemporaryUploadedFile) {
                    $path = $firstFile->store("settings/{$type}", 'public');
                    return 'storage/' . $path;
                }
            }

            return null;
        } catch (\Exception $e) {
            logger()->error("File upload error for {$type}: " . $e->getMessage());
            return null;
        }
    }
}
