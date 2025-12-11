/**
 * Voxi Book Player - Internationalization (i18n) Module
 * Supports: English (en), Russian (ru)
 */

const translations = {
    en: {
        // Meta tags
        meta: {
            title: 'Voxi Book Player - Audiobook Player & Statistics',
            description: 'Your personal audiobook library with powerful statistics. Track every moment, never lose progress. Built for everyone, enhanced by community.',
            keywords: 'audiobook, player, statistics, ios, iphone, ipad, books, listening, progress tracking'
        },

        // Page-specific meta tags
        pages: {
            terms: {
                title: 'Terms of Use — Voxi Book Player',
                description: 'Terms of Use for Voxi Book Player application',
                heading: 'Terms of Use',
                updated: 'Last Updated: December 3, 2025'
            },
            privacy: {
                title: 'Privacy Policy — Voxi Book Player',
                description: 'Privacy Policy for Voxi Book Player application',
                heading: 'Privacy Policy',
                updated: 'Last Updated: December 3, 2025'
            },
            support: {
                title: 'Support & Help Center — Voxi Book Player',
                description: 'Get help with Voxi Book Player. FAQ, guides and contact information.',
                heading: 'Support & Help Center',
                subtitle: 'Having trouble or have a question? We\'re here to help!'
            }
        },

        // Support Page
        supportPage: {
            heading: 'Support & Help Center',
            subtitle: 'Having trouble or have a question? We\'re here to help!',
            faq: {
                title: 'Frequently Asked Questions (FAQ)',
                q1: {
                    question: 'Q: How do I add my audiobooks to the app?',
                    answer: 'A: Voxi Book Player works with your existing audio files. You can add books via iTunes File Sharing (iOS), direct file import from cloud services (Dropbox, Google Drive), or simply by placing files in the "VoxiBooks" folder on your device.'
                },
                q2: {
                    question: 'Q: Does the app sync my progress between devices?',
                    answer: 'A: Currently, listening progress and settings are stored locally on your device. If you have opted-in within the app\'s settings, this data is saved in a local archive. Cloud sync between different devices is not yet available.'
                },
                q3: {
                    question: 'Q: I enabled notifications but don\'t receive updates. Why?',
                    answer: 'A: First, please ensure notifications are enabled both in the app\'s settings and in your device\'s System Settings. The app uses a device identifier to send news about major updates.'
                },
                q4: {
                    question: 'Q: How can I delete my local listening history?',
                    answer: 'A: You can clear your listening archive at any time. Go to App Settings → Privacy & Data → Clear Listening History. Alternatively, uninstalling the app will remove all local data.'
                }
            },
            quickStart: {
                title: 'Quick Start Guide',
                item1: {
                    title: 'Importing Books:',
                    desc: 'Use the \'+\' button in the \'My Library\' section to import files from your device or cloud storage.'
                },
                item2: {
                    title: 'Managing Playback:',
                    desc: 'Use the player screen to control speed, set a sleep timer, or bookmark a moment.'
                },
                item3: {
                    title: 'Organizing:',
                    desc: 'Create custom playlists or use filters to sort your library by author, progress, or duration.'
                }
            },
            contact: {
                title: 'Contact Support',
                description: 'For issues not covered above or to report a bug, please contact our support team directly. We aim to respond within 48 hours.',
                emailLabel: 'Support Email:',
                includeInfo: 'Please include the following information in your email to help us assist you faster:',
                info1: 'Your device model (e.g., iPhone 14, iPad Air).',
                info2: 'Your iOS version.',
                info3: 'A clear description of the issue or your question.'
            },
            legal: {
                title: 'Legal & Policies',
                privacy: 'Privacy Policy — Learn how we handle your data.',
                terms: 'Terms of Use — The terms governing the use of our app.'
            }
        },

        // Privacy Page
        privacyPage: {
            heading: 'Privacy Policy',
            updated: 'Last Updated: December 3, 2025',
            intro: 'This Privacy Policy explains how the Voxi Book Player application collects, uses, and protects information. By using the Application, you agree to the practices described below.',
            related: 'Related:',
            section1: {
                title: '1. Information We Collect',
                desc: 'We collect a minimal amount of information to provide and improve our service. This information falls into two categories:',
                note: 'We do not collect your name, email address, payment details, or any other personally identifiable information unless you voluntarily provide it (e.g., by contacting support).'
            },
            section1a: {
                title: 'a) Information Collected Automatically',
                item1: '<strong>Device Identifier:</strong> For users who enable push notifications, we collect a non-personal, anonymized device identifier (such as an Apple Push Notification token). This identifier is used solely to send you push notifications about new features and updates. We cannot identify you personally from this token.'
            },
            section1b: {
                title: 'b) Information Collected with Your Explicit Consent',
                desc: 'This data is collected only if you explicitly opt-in by checking the corresponding consent box within the Application\'s settings.',
                item1: '<strong>Listening History & Preferences:</strong> If you grant permission, the Application can locally save your in-app settings and create an archive of your listening history. This archive may include the names of audiobooks you have listened to, the total hours listened, and your progress. This data is stored locally on your device to personalize your experience.'
            },
            section2: {
                title: '2. How We Use Your Information',
                item1: 'To send you push notifications about application updates and new features (based on your device identifier).',
                item2: 'To save and restore your application preferences and listening progress across sessions (if you have opted-in).',
                item3: 'To operate, maintain, and improve the Application.'
            },
            section3: {
                title: '3. Data Storage and Security',
                item1: '<strong>Local Storage:</strong> Your listening history and settings (collected with consent) are stored locally on your device. We do not upload, transmit, or store this data on our servers.',
                item2: '<strong>Device Identifier:</strong> The anonymized device identifier for notifications is processed by our secure push notification service provider (Apple Push Notification service for iOS) and is not used for any other purpose.',
                note: 'We implement commercially acceptable security measures to protect the minimal information we handle. However, no method of electronic transmission or storage is 100% secure.'
            },
            section4: {
                title: '4. Data Sharing and Disclosure',
                desc1: 'We do not sell, trade, or rent your information to third parties. We may share the anonymized device identifier strictly with our trusted push notification service provider to deliver updates, as described above.',
                desc2: 'We may disclose information if required to do so by law or in the good faith belief that such action is necessary to comply with legal obligations.'
            },
            section5: {
                title: '5. Your Choices and Control',
                item1: '<strong>Push Notifications:</strong> You can enable or disable push notifications at any time through your device\'s system settings.',
                item2: '<strong>Listening History:</strong> You can revoke consent for storing your listening history and settings at any time by unchecking the opt-in box in the Application\'s settings. To delete existing locally stored data, you can clear the Application\'s data via your device settings or uninstall the Application.',
                item3: '<strong>Opt-Out:</strong> Since we do not collect personal information on our servers, there is no account-based opt-out process.'
            },
            section6: {
                title: '6. Children\'s Privacy',
                desc: 'Our Application is not directed to individuals under the age of 13. We do not knowingly collect personal information from children under 13. If we become aware that a child under 13 has provided us with information, we will take steps to delete such information.'
            },
            section7: {
                title: '7. Changes to This Privacy Policy',
                desc: 'We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last Updated" date. You are advised to review this Privacy Policy periodically for any changes.'
            },
            section8: {
                title: '8. Contact Us',
                desc: 'If you have any questions about this Privacy Policy, please contact us at:'
            }
        },

        // Terms Page
        termsPage: {
            heading: 'Terms of Use',
            updated: 'Last Updated: December 3, 2025',
            related: 'Related:',
            section1: {
                title: '1. Acceptance',
                desc: 'By downloading or using the "Voxi Book Player" application (the "App"), you agree to be bound by these Terms of Use. If you do not agree, do not use the App.'
            },
            section2: {
                title: '2. Service Description',
                desc: 'Voxi Book Player is a mobile audio player that allows you to manage and play audiobook files stored on your personal device. The App is a tool and does not provide any audiobook content itself.'
            },
            section3: {
                title: '3. User Responsibilities',
                desc: 'You are solely responsible for the audiobook files you load into the App. You must ensure you have the necessary rights or licenses to use this content. You agree not to use the App for any unlawful purpose.'
            },
            section4: {
                title: '4. Intellectual Property',
                desc: 'All rights, title, and interest in and to the App (including the code, graphics, and "Voxi Book Player" trademark) are and will remain the exclusive property of Voxi Book Player.'
            },
            section5: {
                title: '5. Disclaimer of Warranty',
                desc: 'THE APP IS PROVIDED "AS IS" AND "AS AVAILABLE" WITHOUT ANY WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED. WE DO NOT WARRANT THAT THE APP WILL BE UNINTERRUPTED OR ERROR-FREE.'
            },
            section6: {
                title: '6. Limitation of Liability',
                desc: 'TO THE MAXIMUM EXTENT PERMITTED BY LAW, IN NO EVENT SHALL VOXI BOOK PLAYER BE LIABLE FOR ANY INDIRECT, INCIDENTAL, OR CONSEQUENTIAL DAMAGES ARISING OUT OF YOUR USE OR INABILITY TO USE THE APP.'
            },
            section7: {
                title: '7. Governing Law',
                desc: 'These Terms, as well as any matters relating to their interpretation or application, shall be governed by and construed in accordance with the laws of the country of registration of the Application Owner, excluding the operation of conflict of laws rules.'
            },
            section8: {
                title: '8. Changes to Terms',
                desc: 'We reserve the right to modify these Terms at any time. We will notify users by updating the "Last Updated" date. Your continued use of the App after any change constitutes your acceptance of the new Terms.'
            },
            section9: {
                title: '9. Contact Us',
                desc: 'For any questions regarding these Terms, please contact us via our'
            }
        },

        // Navigation
        nav: {
            home: 'Home',
            features: 'Features',
            statistics: 'Statistics',
            whyVoxi: 'Why Voxi',
            allFeatures: 'All Features',
            download: 'Download',
            news: 'News',
            support: 'Support'
        },

        // Hero Section
        hero: {
            title: 'Voxi Book Player',
            subtitle: 'Audiobook Player & Statistics',
            description: 'Your personal audiobook library with powerful statistics. Track every moment, never lose progress. Built for everyone, enhanced by community.'
        },

        // Features Section
        features: {
            label: 'Features',
            title: 'Why Voxi Book Player?',
            description: 'Remember the warmth of that audiobook you\'ve been listening to for years? Voxi keeps every precious moment.',
            statistics: {
                title: '📊 Powerful Statistics',
                description: 'Track your listening journey. See exactly how much time you\'ve spent with each book. Your audiobook journey documented forever.'
            },
            player: {
                title: '🎵 Professional Player',
                description: 'Speed control 0.5x-2.0x, sleep timer, customizable skip intervals. Lock screen controls and background playback.'
            },
            privacy: {
                title: '🔒 Nothing Gets Lost',
                description: 'Automatic archiving preserves all your statistics. Deleted books saved with full history. Your data stays private on your device.'
            }
        },

        // About Sections
        about: {
            stats: {
                title: '📊 Powerful Statistics <br> Your Listening Story',
                description: 'Years from now, you\'ll look back and remember: "I listened to War and Peace for 6 months, spending 47 hours with Tolstoy." Voxi preserves these memories.',
                item1: 'Automatic listening time tracking for every book',
                item2: 'Progress calculation based on actual listening time',
                item3: 'Archive system - nothing gets lost',
                item4: 'Complete listening history preserved forever'
            },
            player: {
                title: '🎵 Professional Audio Player',
                description: 'Full-featured audio player designed for long-form listening. Every control you need, right at your fingertips.',
                item1: 'Playback speed 0.5x - 2.0x in 0.1x increments',
                item2: 'Sleep timer (5-90 min) & auto shutdown',
                item3: 'Customizable skip interval (15-90 seconds)',
                item4: 'Lock screen controls with full metadata',
                item5: 'Background playback & auto position saving'
            },
            library: {
                title: '📚 Complete Library Management',
                description: 'Full control over your audiobook collection. Custom covers, metadata editing, drag & drop organization.',
                item1: 'Custom book and track covers from photos',
                item2: 'Edit all metadata (title, author, narrator)',
                item3: 'Drag & drop reordering for books and files',
                item4: 'Search by title, author, or narrator',
                item5: 'Batch metadata updates'
            }
        },

        // Key Features Section
        keyFeatures: {
            title: '✨ Key Features Summary',
            description: 'Everything you need for the perfect audiobook experience. Built for book lovers, by listeners.',
            devices: {
                title: 'iPhone & iPad',
                description: 'Optimized for all screen sizes with split view on iPad'
            },
            fonts: {
                title: '7+ Custom Fonts',
                description: 'Font size 0.5x-2.0x, Light/Dark/System themes'
            },
            language: {
                title: 'Multi-Language',
                description: 'Russian & English, more languages coming soon'
            },
            accessibility: {
                title: '♿ Accessibility First',
                description: 'Full VoiceOver support, Dynamic Type, always free'
            },
            community: {
                title: '💬 Community-Driven',
                description: 'In-app support, feature requests shape development'
            },
            privacyFirst: {
                title: '🔒 Privacy First',
                description: 'All data local, no tracking, no ads, optional cloud sync'
            }
        },

        // Why Voxi Section
        whyVoxi: {
            label: '🌟 Why Voxi Book Player?',
            title: 'Perfect For',
            description: 'Start your documented audiobook journey today. Every minute counts, every book matters, and nothing gets lost.',
            bookLovers: {
                title: 'For Book Lovers',
                description: 'Years from now, you\'ll look back and remember exactly how long you spent with each beloved book. Voxi preserves these memories.'
            },
            accessibility: {
                title: 'For Accessibility',
                description: 'We believe audiobooks should be accessible to everyone. Accessibility features are our priority and will always be free.'
            },
            peaceOfMind: {
                title: 'For Peace of Mind',
                description: 'Your progress, your statistics, your memories - nothing gets lost. Ever. Automatic archiving ensures your journey is documented forever.'
            },
            longForm: {
                title: 'Long-form Listeners',
                description: 'People who listen to books over months or years. Track your progress across epic fantasy series or years of learning.'
            },
            community: {
                title: 'For Community',
                description: 'Built by listeners, for listeners. Your feedback shapes our development. Request features, and we\'ll build them.'
            },
            fullControl: {
                title: 'Full Control',
                description: 'Anyone who wants complete control over their audiobook library with custom covers, metadata editing, and organization.'
            }
        },

        // All Features Section
        allFeatures: {
            label: 'Complete Feature List',
            title: '📋 All Features',
            description: 'Complete technical specification of everything Voxi Book Player can do',
            items: 'features',
            showDetails: 'Show all details',
            hideDetails: 'Hide details',
            totalFeatures: 'features total',
            playback: {
                title: 'Playback',
                item1: 'Play / Pause / Stop controls',
                item2: 'Skip forward/back (15-90 sec configurable)',
                item3: 'Next/Previous track navigation',
                item4: 'Seek slider for any position',
                item5: 'Speed: 1.0×-2.0× (0.1× steps)',
                item6: 'Volume: 10%-100% (below system level)',
                item7: 'Auto position save per file',
                item8: 'Mini-player state restore (7 days)'
            },
            background: {
                title: 'Background Audio',
                item1: 'Playback with screen off',
                item2: 'Lock Screen controls',
                item3: 'Control Center integration',
                item4: 'Dynamic Island / Now Playing',
                item5: 'Smart interruption handling',
                item6: 'Auto-recovery after iOS audio reset'
            },
            timers: {
                title: 'Timers',
                item1: 'Sleep timer: 5-90 minutes',
                item2: 'Remaining time display',
                item3: 'Auto-pause on timer',
                item4: 'Daily auto-shutdown (HH:MM)',
                item5: 'Scheduled pause at exact time'
            },
            library: {
                title: 'Library Management',
                item1: 'Create books, import audio files',
                item2: 'Formats: MP3, M4A, M4B, AAC, WAV, FLAC, OGG, OPUS',
                item3: 'Edit metadata (title, author, narrator)',
                item4: 'Custom covers from gallery/camera',
                item5: 'Drag & drop reordering',
                item6: 'Individual track covers & metadata',
                item7: 'Favorites collection',
                item8: 'Archive with preserved stats'
            },
            statistics: {
                title: 'Statistics',
                item1: 'Toggle tracking on/off',
                item2: 'Total listening time across all books',
                item3: 'Per-book completion percentage',
                item4: 'Per-file progress tracking',
                item5: 'Time in hours/minutes/seconds',
                item6: 'Preserved on archive'
            },
            personalization: {
                title: 'Personalization',
                item1: 'Light / Dark / System theme',
                item2: '7+ font choices + search',
                item3: 'Text scale 0.5×-2.0×',
                item4: 'Russian 🇷🇺 / English 🇺🇸 / System',
                item5: 'Portrait orientation lock'
            },
            accessibility: {
                title: 'Accessibility',
                item1: 'Full VoiceOver support',
                item2: 'Dynamic Type scaling',
                item3: 'Accessibility labels on all elements',
                item4: 'Accessibility hints for actions',
                item5: '44×44pt minimum touch targets'
            },
            interface: {
                title: 'Interface',
                item1: 'iPhone optimized layout',
                item2: 'iPad 2-column with sidebar',
                item3: 'Landscape orientation support',
                item4: 'Global mini-player on all screens',
                item5: 'Waveform playback animation',
                item6: 'Smooth transitions & spring animations'
            },
            technical: {
                title: 'Technical',
                item1: 'Background audio & processing',
                item2: 'Health check every 30 sec',
                item3: 'Auto-recovery after failures',
                item4: 'Retry logic & error logging',
                item5: 'Lazy loading & LRU cache',
                item6: 'Throttled UI updates',
                item7: 'Cloud sync (Beta)'
            }
        },

        // Planned Features Section
        plannedFeatures: {
            label: '🚀 Coming Soon',
            title: 'Planned Features',
            description: 'Features in active development or planned for future releases. Sorted by implementation complexity.',
            note: '💬 Have a feature request? Submit it via in-app support!',
            easy: {
                title: 'Quick Wins',
                label: 'Easy to implement',
                item1: {
                    title: 'Pause at End of File',
                    desc: 'Auto-stop after current track ends'
                },
                item2: {
                    title: 'Import/Export JSON',
                    desc: 'Backup settings, playlists & progress'
                },
                item3: {
                    title: 'Series & Author Grouping',
                    desc: 'Auto-organize books by metadata'
                }
            },
            medium: {
                title: 'Audio Processing',
                label: 'Medium complexity',
                item1: {
                    title: 'Silence Trimmer',
                    desc: 'Auto-remove long pauses with configurable threshold'
                },
                item2: {
                    title: 'Click & Pop Remover',
                    desc: 'Intelligent noise suppression for vinyl digitizations'
                },
                item3: {
                    title: 'CUE File Support',
                    desc: 'Split single audio into chapters using CUE sheets'
                },
                item4: {
                    title: 'Cloud Backup',
                    desc: 'Auto-backup to Google Drive / iCloud'
                }
            },
            complex: {
                title: 'Major Features',
                label: 'Complex implementation',
                item1: {
                    title: 'Network Storage (NAS/SMB/UPnP)',
                    desc: 'Stream from network folders without copying'
                },
                item2: {
                    title: 'Cross-Device Sync',
                    desc: 'Seamless progress sync between devices'
                },
                item3: {
                    title: 'Local Web Server',
                    desc: 'Manage library via browser on local network'
                },
                item4: {
                    title: 'Desktop App',
                    desc: 'Windows, macOS & Linux with unified UI'
                }
            }
        },

        // Download Section
        download: {
            label: '📱 Device Support',
            title: 'Available for iPhone & iPad',
            description: 'iOS 16.0 or later. Optimized for all screen sizes with split view on iPad. Portrait and landscape support.',
            gettingStarted: {
                title: 'Getting Started',
                description: 'Add audiobook → Import files → Start listening'
            },
            support: {
                title: 'Support & Feedback',
                description: 'In-app support system in Profile section'
            }
        },

        // News Section
        news: {
            label: '📰 Updates',
            title: 'What\'s New',
            description: 'Stay updated with the latest features and improvements',
            readMore: 'Read More',
            showLess: 'Show Less',
            noNews: 'No news yet. Stay tuned for updates!'
        },

        // Footer
        footer: {
            description: 'Your personal audiobook library with powerful statistics. Track every moment, never lose progress. Built for everyone, enhanced by community.',
            app: {
                title: 'App'
            },
            legal: {
                title: 'Legal & Support',
                terms: 'Terms of Service',
                privacy: 'Privacy Policy'
            },
            support: {
                title: '🆘 Support',
                description: 'We\'re here to help. Submit tickets directly in the Profile section of the app.',
                item1: 'In-app support system',
                item2: 'Direct team communication',
                item3: 'Feature request submission',
                downloadBtn: 'Download App'
            },
            copyright: 'All Rights Reserved.',
            tagline: 'iOS 16.0+ • iPhone • iPad • Made with ❤️ for audiobook lovers'
        }
    },

    ru: {
        // Meta tags
        meta: {
            title: 'Voxi Book Player - Аудиокниги и статистика',
            description: 'Ваша личная библиотека аудиокниг с мощной статистикой. Отслеживайте каждый момент, никогда не теряйте прогресс. Создано для всех, улучшено сообществом.',
            keywords: 'аудиокниги, плеер, статистика, ios, iphone, ipad, книги, прослушивание, отслеживание прогресса'
        },

        // Page-specific meta tags
        pages: {
            terms: {
                title: 'Условия использования — Voxi Book Player',
                description: 'Условия использования приложения Voxi Book Player',
                heading: 'Условия использования',
                updated: 'Последнее обновление: 3 декабря 2025'
            },
            privacy: {
                title: 'Политика конфиденциальности — Voxi Book Player',
                description: 'Политика конфиденциальности приложения Voxi Book Player',
                heading: 'Политика конфиденциальности',
                updated: 'Последнее обновление: 3 декабря 2025'
            },
            support: {
                title: 'Поддержка и справка — Voxi Book Player',
                description: 'Получите помощь по Voxi Book Player. FAQ, руководства и контакты.',
                heading: 'Поддержка и справка',
                subtitle: 'Возникли проблемы или вопросы? Мы готовы помочь!'
            }
        },

        // Support Page
        supportPage: {
            heading: 'Поддержка и справка',
            subtitle: 'Возникли проблемы или вопросы? Мы готовы помочь!',
            faq: {
                title: 'Часто задаваемые вопросы (FAQ)',
                q1: {
                    question: 'В: Как добавить аудиокниги в приложение?',
                    answer: 'О: Voxi Book Player работает с вашими аудиофайлами. Вы можете добавить книги через iTunes File Sharing (iOS), импорт из облачных сервисов (Dropbox, Google Drive) или просто поместив файлы в папку "VoxiBooks" на устройстве.'
                },
                q2: {
                    question: 'В: Синхронизирует ли приложение прогресс между устройствами?',
                    answer: 'О: В настоящее время прогресс и настройки хранятся локально на устройстве. Если вы включили эту опцию в настройках, данные сохраняются в локальном архиве. Облачная синхронизация между устройствами пока недоступна.'
                },
                q3: {
                    question: 'В: Я включил уведомления, но не получаю обновления. Почему?',
                    answer: 'О: Убедитесь, что уведомления включены как в настройках приложения, так и в системных настройках устройства. Приложение использует идентификатор устройства для отправки новостей о важных обновлениях.'
                },
                q4: {
                    question: 'В: Как удалить историю прослушивания?',
                    answer: 'О: Вы можете очистить архив прослушивания в любое время. Перейдите в Настройки → Конфиденциальность → Очистить историю. Также удаление приложения удалит все локальные данные.'
                }
            },
            quickStart: {
                title: 'Краткое руководство',
                item1: {
                    title: 'Импорт книг:',
                    desc: 'Используйте кнопку "+" в разделе "Моя библиотека" для импорта файлов с устройства или облачного хранилища.'
                },
                item2: {
                    title: 'Управление воспроизведением:',
                    desc: 'Используйте экран плеера для управления скоростью, настройки таймера сна или создания закладки.'
                },
                item3: {
                    title: 'Организация:',
                    desc: 'Создавайте плейлисты или используйте фильтры для сортировки библиотеки по автору, прогрессу или длительности.'
                }
            },
            contact: {
                title: 'Связаться с поддержкой',
                description: 'По вопросам, не описанным выше, или для сообщения об ошибке, свяжитесь с нашей командой. Мы стараемся ответить в течение 48 часов.',
                emailLabel: 'Email поддержки:',
                includeInfo: 'Пожалуйста, укажите следующую информацию для быстрого решения:',
                info1: 'Модель устройства (например, iPhone 14, iPad Air).',
                info2: 'Версия iOS.',
                info3: 'Подробное описание проблемы или вопроса.'
            },
            legal: {
                title: 'Документы',
                privacy: 'Политика конфиденциальности — Как мы обрабатываем ваши данные.',
                terms: 'Условия использования — Условия использования приложения.'
            }
        },

        // Privacy Page
        privacyPage: {
            heading: 'Политика конфиденциальности',
            updated: 'Последнее обновление: 3 декабря 2025',
            intro: 'Данная Политика конфиденциальности объясняет, как приложение Voxi Book Player собирает, использует и защищает информацию. Используя приложение, вы соглашаетесь с описанными ниже практиками.',
            related: 'Смотрите также:',
            section1: {
                title: '1. Какую информацию мы собираем',
                desc: 'Мы собираем минимальный объём информации для предоставления и улучшения сервиса. Эта информация делится на две категории:',
                note: 'Мы не собираем ваше имя, email, платёжные данные или любую другую личную информацию, если вы не предоставите её добровольно (например, при обращении в поддержку).'
            },
            section1a: {
                title: 'а) Автоматически собираемая информация',
                item1: '<strong>Идентификатор устройства:</strong> Для пользователей, включивших push-уведомления, мы собираем обезличенный идентификатор устройства (например, токен Apple Push Notification). Этот идентификатор используется исключительно для отправки уведомлений о новых функциях и обновлениях. Мы не можем идентифицировать вас по этому токену.'
            },
            section1b: {
                title: 'б) Информация, собираемая с вашего согласия',
                desc: 'Эти данные собираются только при явном согласии через соответствующую опцию в настройках приложения.',
                item1: '<strong>История прослушивания:</strong> С вашего разрешения приложение может локально сохранять настройки и создавать архив истории прослушивания. Этот архив может включать названия прослушанных аудиокниг, общее время прослушивания и прогресс. Данные хранятся локально на вашем устройстве.'
            },
            section2: {
                title: '2. Как мы используем вашу информацию',
                item1: 'Для отправки push-уведомлений об обновлениях приложения и новых функциях (на основе идентификатора устройства).',
                item2: 'Для сохранения и восстановления настроек приложения и прогресса прослушивания между сессиями (при согласии).',
                item3: 'Для работы, поддержки и улучшения приложения.'
            },
            section3: {
                title: '3. Хранение данных и безопасность',
                item1: '<strong>Локальное хранение:</strong> История прослушивания и настройки (собранные с согласия) хранятся локально на вашем устройстве. Мы не загружаем, не передаём и не храним эти данные на наших серверах.',
                item2: '<strong>Идентификатор устройства:</strong> Обезличенный идентификатор для уведомлений обрабатывается защищённым сервисом push-уведомлений (Apple Push Notification service для iOS) и не используется для других целей.',
                note: 'Мы применяем коммерчески приемлемые меры безопасности для защиты минимальной обрабатываемой информации. Однако ни один метод электронной передачи или хранения не является на 100% безопасным.'
            },
            section4: {
                title: '4. Передача и раскрытие данных',
                desc1: 'Мы не продаём, не обмениваем и не сдаём в аренду вашу информацию третьим лицам. Мы можем передавать обезличенный идентификатор устройства только нашему доверенному провайдеру push-уведомлений для доставки обновлений.',
                desc2: 'Мы можем раскрыть информацию, если это требуется по закону или при добросовестном убеждении в необходимости такого действия для соблюдения юридических обязательств.'
            },
            section5: {
                title: '5. Ваш выбор и контроль',
                item1: '<strong>Push-уведомления:</strong> Вы можете включить или отключить уведомления в любое время через системные настройки устройства.',
                item2: '<strong>История прослушивания:</strong> Вы можете отозвать согласие на хранение истории в настройках приложения. Для удаления существующих данных очистите данные приложения или удалите его.',
                item3: '<strong>Отказ:</strong> Поскольку мы не собираем личную информацию на наших серверах, процесс отказа на основе учётной записи отсутствует.'
            },
            section6: {
                title: '6. Конфиденциальность детей',
                desc: 'Наше приложение не предназначено для лиц младше 13 лет. Мы сознательно не собираем личную информацию от детей младше 13 лет. Если мы узнаем, что ребёнок младше 13 лет предоставил нам информацию, мы примем меры для её удаления.'
            },
            section7: {
                title: '7. Изменения в Политике конфиденциальности',
                desc: 'Мы можем периодически обновлять нашу Политику конфиденциальности. Мы уведомим вас об изменениях, разместив новую Политику на этой странице и обновив дату «Последнее обновление». Рекомендуем периодически просматривать эту Политику.'
            },
            section8: {
                title: '8. Связаться с нами',
                desc: 'Если у вас есть вопросы о данной Политике конфиденциальности, свяжитесь с нами:'
            }
        },

        // Terms Page
        termsPage: {
            heading: 'Условия использования',
            updated: 'Последнее обновление: 3 декабря 2025',
            related: 'Смотрите также:',
            section1: {
                title: '1. Принятие условий',
                desc: 'Скачивая или используя приложение «Voxi Book Player» (далее «Приложение»), вы соглашаетесь соблюдать настоящие Условия использования. Если вы не согласны, не используйте Приложение.'
            },
            section2: {
                title: '2. Описание сервиса',
                desc: 'Voxi Book Player — мобильный аудиоплеер для управления и воспроизведения аудиокниг, хранящихся на вашем устройстве. Приложение является инструментом и не предоставляет контент аудиокниг.'
            },
            section3: {
                title: '3. Обязанности пользователя',
                desc: 'Вы несёте полную ответственность за аудиофайлы, которые загружаете в Приложение. Вы должны убедиться, что у вас есть необходимые права или лицензии на использование этого контента. Вы соглашаетесь не использовать Приложение в незаконных целях.'
            },
            section4: {
                title: '4. Интеллектуальная собственность',
                desc: 'Все права, право собственности и интересы в отношении Приложения (включая код, графику и товарный знак «Voxi Book Player») являются и остаются исключительной собственностью Voxi Book Player.'
            },
            section5: {
                title: '5. Отказ от гарантий',
                desc: 'ПРИЛОЖЕНИЕ ПРЕДОСТАВЛЯЕТСЯ «КАК ЕСТЬ» И «КАК ДОСТУПНО» БЕЗ КАКИХ-ЛИБО ГАРАНТИЙ, ЯВНЫХ ИЛИ ПОДРАЗУМЕВАЕМЫХ. МЫ НЕ ГАРАНТИРУЕМ, ЧТО ПРИЛОЖЕНИЕ БУДЕТ РАБОТАТЬ НЕПРЕРЫВНО ИЛИ БЕЗ ОШИБОК.'
            },
            section6: {
                title: '6. Ограничение ответственности',
                desc: 'В МАКСИМАЛЬНОЙ СТЕПЕНИ, РАЗРЕШЁННОЙ ЗАКОНОМ, VOXI BOOK PLAYER НИ ПРИ КАКИХ ОБСТОЯТЕЛЬСТВАХ НЕ НЕСЁТ ОТВЕТСТВЕННОСТИ ЗА ЛЮБЫЕ КОСВЕННЫЕ, СЛУЧАЙНЫЕ ИЛИ ПОСЛЕДУЮЩИЕ УБЫТКИ, ВОЗНИКШИЕ В РЕЗУЛЬТАТЕ ИСПОЛЬЗОВАНИЯ ИЛИ НЕВОЗМОЖНОСТИ ИСПОЛЬЗОВАНИЯ ПРИЛОЖЕНИЯ.'
            },
            section7: {
                title: '7. Применимое право',
                desc: 'Настоящие Условия, а также любые вопросы, связанные с их толкованием или применением, регулируются и подлежат толкованию в соответствии с законодательством страны регистрации Владельца Приложения, исключая действие коллизионных норм.'
            },
            section8: {
                title: '8. Изменение Условий',
                desc: 'Мы оставляем за собой право изменять настоящие Условия в любое время. Мы уведомим пользователей, обновив дату «Последнее обновление». Продолжение использования Приложения после любого изменения означает ваше согласие с новыми Условиями.'
            },
            section9: {
                title: '9. Связаться с нами',
                desc: 'По любым вопросам относительно настоящих Условий, свяжитесь с нами через'
            }
        },

        // Navigation
        nav: {
            home: 'Главная',
            features: 'Возможности',
            statistics: 'Статистика',
            whyVoxi: 'Почему Voxi',
            allFeatures: 'Все функции',
            download: 'Скачать',
            news: 'Новости',
            support: 'Поддержка'
        },

        // Hero Section
        hero: {
            title: 'Voxi Book Player',
            subtitle: 'Аудиокниги и статистика',
            description: 'Ваша личная библиотека аудиокниг с мощной статистикой. Отслеживайте каждый момент, никогда не теряйте прогресс. Создано для всех, улучшено сообществом.'
        },

        // Features Section
        features: {
            label: 'Возможности',
            title: 'Почему Voxi Book Player?',
            description: 'Помните тепло той аудиокниги, которую вы слушали годами? Voxi сохраняет каждый драгоценный момент.',
            statistics: {
                title: '📊 Мощная статистика',
                description: 'Отслеживайте своё путешествие. Узнайте, сколько времени вы провели с каждой книгой. Ваш путь аудиокниг задокументирован навсегда.'
            },
            player: {
                title: '🎵 Профессиональный плеер',
                description: 'Скорость 0.5x-2.0x, таймер сна, настраиваемые интервалы перемотки. Управление с экрана блокировки и фоновое воспроизведение.'
            },
            privacy: {
                title: '🔒 Ничего не теряется',
                description: 'Автоматическое архивирование сохраняет всю статистику. Удалённые книги сохраняются с полной историей. Ваши данные остаются на устройстве.'
            }
        },

        // About Sections
        about: {
            stats: {
                title: '📊 Мощная статистика <br> Ваша история прослушивания',
                description: 'Через много лет вы вспомните: «Я слушал «Войну и мир» 6 месяцев, проведя 47 часов с Толстым». Voxi сохраняет эти воспоминания.',
                item1: 'Автоматическое отслеживание времени прослушивания',
                item2: 'Расчёт прогресса на основе фактического времени',
                item3: 'Система архивации — ничего не теряется',
                item4: 'Полная история прослушивания сохраняется навсегда'
            },
            player: {
                title: '🎵 Профессиональный аудиоплеер',
                description: 'Полнофункциональный плеер для длительного прослушивания. Все необходимые элементы управления под рукой.',
                item1: 'Скорость воспроизведения 0.5x - 2.0x с шагом 0.1x',
                item2: 'Таймер сна (5-90 мин) и автовыключение',
                item3: 'Настраиваемый интервал перемотки (15-90 сек)',
                item4: 'Управление с экрана блокировки с метаданными',
                item5: 'Фоновое воспроизведение и автосохранение позиции'
            },
            library: {
                title: '📚 Полное управление библиотекой',
                description: 'Полный контроль над коллекцией аудиокниг. Свои обложки, редактирование метаданных, организация перетаскиванием.',
                item1: 'Свои обложки книг и треков из фото',
                item2: 'Редактирование метаданных (название, автор, чтец)',
                item3: 'Перетаскивание для сортировки книг и файлов',
                item4: 'Поиск по названию, автору или чтецу',
                item5: 'Массовое обновление метаданных'
            }
        },

        // Key Features Section
        keyFeatures: {
            title: '✨ Ключевые возможности',
            description: 'Всё необходимое для идеального прослушивания. Создано любителями книг для слушателей.',
            devices: {
                title: 'iPhone и iPad',
                description: 'Оптимизировано для всех экранов с Split View на iPad'
            },
            fonts: {
                title: '7+ шрифтов',
                description: 'Размер шрифта 0.5x-2.0x, светлая/тёмная/системная тема'
            },
            language: {
                title: 'Мультиязычность',
                description: 'Русский и английский, скоро больше языков'
            },
            accessibility: {
                title: '♿ Доступность',
                description: 'Полная поддержка VoiceOver, Dynamic Type, всегда бесплатно'
            },
            community: {
                title: '💬 Сообщество',
                description: 'Поддержка в приложении, ваши запросы влияют на развитие'
            },
            privacyFirst: {
                title: '🔒 Приватность',
                description: 'Все данные локально, без отслеживания, без рекламы'
            }
        },

        // Why Voxi Section
        whyVoxi: {
            label: '🌟 Почему Voxi Book Player?',
            title: 'Идеально для',
            description: 'Начните свой задокументированный путь аудиокниг сегодня. Каждая минута важна, каждая книга имеет значение, ничего не теряется.',
            bookLovers: {
                title: 'Для любителей книг',
                description: 'Через много лет вы вспомните, сколько времени провели с каждой любимой книгой. Voxi сохраняет эти воспоминания.'
            },
            accessibility: {
                title: 'Для доступности',
                description: 'Мы верим, что аудиокниги должны быть доступны каждому. Функции доступности — наш приоритет и всегда будут бесплатными.'
            },
            peaceOfMind: {
                title: 'Для спокойствия',
                description: 'Ваш прогресс, статистика, воспоминания — ничего не теряется. Никогда. Автоматическое архивирование гарантирует документирование пути.'
            },
            longForm: {
                title: 'Для долгих книг',
                description: 'Для тех, кто слушает книги месяцами или годами. Отслеживайте прогресс эпических серий или лет обучения.'
            },
            community: {
                title: 'Для сообщества',
                description: 'Создано слушателями для слушателей. Ваши отзывы формируют развитие. Запрашивайте функции — мы их создадим.'
            },
            fullControl: {
                title: 'Полный контроль',
                description: 'Для тех, кто хочет полный контроль над библиотекой со своими обложками, редактированием и организацией.'
            }
        },

        // All Features Section
        allFeatures: {
            label: 'Полный список функций',
            title: '📋 Все функции',
            description: 'Полная техническая спецификация всех возможностей Voxi Book Player',
            items: 'функций',
            showDetails: 'Показать подробности',
            hideDetails: 'Свернуть',
            totalFeatures: 'функций всего',
            playback: {
                title: 'Воспроизведение',
                item1: 'Play / Pause / Stop — управление воспроизведением',
                item2: 'Перемотка вперёд/назад (15-90 сек, настраивается)',
                item3: 'Следующий/Предыдущий трек',
                item4: 'Ползунок перемотки в любое место',
                item5: 'Скорость: 1.0×-2.0× (шаг 0.1×)',
                item6: 'Громкость: 10%-100% (ниже системного уровня)',
                item7: 'Автосохранение позиции каждого файла',
                item8: 'Восстановление мини-плеера (7 дней)'
            },
            background: {
                title: 'Фоновое воспроизведение',
                item1: 'Воспроизведение при выключенном экране',
                item2: 'Управление с Lock Screen',
                item3: 'Интеграция с Control Center',
                item4: 'Dynamic Island / Now Playing',
                item5: 'Умная обработка прерываний',
                item6: 'Автовосстановление после сброса iOS audio'
            },
            timers: {
                title: 'Таймеры',
                item1: 'Таймер сна: 5-90 минут',
                item2: 'Отображение оставшегося времени',
                item3: 'Автопауза при срабатывании',
                item4: 'Ежедневное автовыключение (ЧЧ:ММ)',
                item5: 'Пауза в назначенное время'
            },
            library: {
                title: 'Управление библиотекой',
                item1: 'Создание книг, импорт аудиофайлов',
                item2: 'Форматы: MP3, M4A, M4B, AAC, WAV, FLAC, OGG, OPUS',
                item3: 'Редактирование метаданных (название, автор, чтец)',
                item4: 'Свои обложки из галереи/камеры',
                item5: 'Drag & drop сортировка',
                item6: 'Обложки и метаданные для каждого трека',
                item7: 'Коллекция «Избранное»',
                item8: 'Архив с сохранением статистики'
            },
            statistics: {
                title: 'Статистика',
                item1: 'Вкл/выкл сбора статистики',
                item2: 'Общее время прослушивания по всем книгам',
                item3: 'Процент завершения книги',
                item4: 'Прогресс по каждому файлу',
                item5: 'Время в часах/минутах/секундах',
                item6: 'Сохраняется при архивации'
            },
            personalization: {
                title: 'Персонализация',
                item1: 'Светлая / Тёмная / Системная тема',
                item2: '7+ шрифтов + поиск',
                item3: 'Масштаб текста 0.5×-2.0×',
                item4: 'Русский 🇷🇺 / English 🇺🇸 / Системный',
                item5: 'Блокировка портретной ориентации'
            },
            accessibility: {
                title: 'Доступность',
                item1: 'Полная поддержка VoiceOver',
                item2: 'Масштабирование Dynamic Type',
                item3: 'Accessibility labels на всех элементах',
                item4: 'Accessibility hints для действий',
                item5: 'Минимум 44×44pt области нажатия'
            },
            interface: {
                title: 'Интерфейс',
                item1: 'Оптимизированный layout для iPhone',
                item2: 'iPad: 2 колонки с боковой панелью',
                item3: 'Поддержка горизонтальной ориентации',
                item4: 'Глобальный мини-плеер на всех экранах',
                item5: 'Анимация waveform при воспроизведении',
                item6: 'Плавные переходы и spring-анимации'
            },
            technical: {
                title: 'Технические возможности',
                item1: 'Фоновый аудио и обработка',
                item2: 'Health check каждые 30 сек',
                item3: 'Автовосстановление после сбоев',
                item4: 'Retry logic и журналирование ошибок',
                item5: 'Lazy loading и LRU кэш',
                item6: 'Дросселирование UI обновлений',
                item7: 'Облачная синхронизация (Beta)'
            }
        },

        // Planned Features Section
        plannedFeatures: {
            label: '🚀 Скоро',
            title: 'Планируемые функции',
            description: 'Функции в активной разработке или запланированные для будущих версий. Отсортировано по сложности реализации.',
            note: '💬 Есть идея? Отправьте запрос через поддержку в приложении!',
            easy: {
                title: 'Быстрые улучшения',
                label: 'Простая реализация',
                item1: {
                    title: 'Пауза в конце файла',
                    desc: 'Автостоп после завершения текущего трека'
                },
                item2: {
                    title: 'Импорт/Экспорт JSON',
                    desc: 'Резервное копирование настроек и прогресса'
                },
                item3: {
                    title: 'Группировка по сериям и авторам',
                    desc: 'Автоорганизация книг по метаданным'
                }
            },
            medium: {
                title: 'Обработка звука',
                label: 'Средняя сложность',
                item1: {
                    title: 'Удаление тишины',
                    desc: 'Автоудаление длинных пауз с настраиваемым порогом'
                },
                item2: {
                    title: 'Подавитель щелчков',
                    desc: 'Интеллектуальное подавление шума для оцифровок с винила'
                },
                item3: {
                    title: 'Поддержка CUE-файлов',
                    desc: 'Разделение аудио на главы по CUE-листам'
                },
                item4: {
                    title: 'Облачный бэкап',
                    desc: 'Автосохранение в Google Drive / iCloud'
                }
            },
            complex: {
                title: 'Крупные функции',
                label: 'Сложная реализация',
                item1: {
                    title: 'Сетевые хранилища (NAS/SMB/UPnP)',
                    desc: 'Стриминг из сетевых папок без копирования'
                },
                item2: {
                    title: 'Синхронизация между устройствами',
                    desc: 'Бесшовное продолжение прослушивания'
                },
                item3: {
                    title: 'Локальный веб-сервер',
                    desc: 'Управление библиотекой через браузер'
                },
                item4: {
                    title: 'Десктоп-приложение',
                    desc: 'Windows, macOS и Linux с единым интерфейсом'
                }
            }
        },

        // Download Section
        download: {
            label: '📱 Устройства',
            title: 'Доступно для iPhone и iPad',
            description: 'iOS 16.0 и новее. Оптимизировано для всех экранов с Split View на iPad. Поддержка портретной и альбомной ориентации.',
            gettingStarted: {
                title: 'Начало работы',
                description: 'Добавить книгу → Импорт файлов → Слушать'
            },
            support: {
                title: 'Поддержка и отзывы',
                description: 'Система поддержки в разделе Профиль'
            }
        },

        // News Section
        news: {
            label: '📰 Обновления',
            title: 'Что нового',
            description: 'Следите за последними функциями и улучшениями',
            readMore: 'Подробнее',
            showLess: 'Свернуть',
            noNews: 'Новостей пока нет. Следите за обновлениями!'
        },

        // Footer
        footer: {
            description: 'Ваша личная библиотека аудиокниг с мощной статистикой. Отслеживайте каждый момент, никогда не теряйте прогресс. Создано для всех, улучшено сообществом.',
            app: {
                title: 'Приложение'
            },
            legal: {
                title: 'Документы',
                terms: 'Условия использования',
                privacy: 'Политика конфиденциальности'
            },
            support: {
                title: '🆘 Поддержка',
                description: 'Мы готовы помочь. Отправляйте обращения в разделе Профиль приложения.',
                item1: 'Система поддержки в приложении',
                item2: 'Прямая связь с командой',
                item3: 'Отправка запросов на функции',
                downloadBtn: 'Скачать приложение'
            },
            copyright: 'Все права защищены.',
            tagline: 'iOS 16.0+ • iPhone • iPad • Создано с ❤️ для любителей аудиокниг'
        }
    }
};

/**
 * Get nested value from object using dot notation
 */
function getNestedValue(obj, path) {
    return path.split('.').reduce((current, key) => current && current[key], obj);
}

/**
 * Apply translations to all elements with data-i18n attribute
 */
function applyTranslations(lang) {
    const elements = document.querySelectorAll('[data-i18n]');
    const langData = translations[lang] || translations.en;

    elements.forEach(el => {
        const key = el.getAttribute('data-i18n');
        const translation = getNestedValue(langData, key);
        
        if (translation) {
            el.innerHTML = translation;
        }
    });

    // Update language indicator buttons
    const langUpper = lang.toUpperCase();
    const currentLangEl = document.getElementById('currentLang');
    const currentLangLightEl = document.getElementById('currentLangLight');
    
    if (currentLangEl) currentLangEl.textContent = langUpper;
    if (currentLangLightEl) currentLangLightEl.textContent = langUpper;

    // Update html lang attribute
    document.documentElement.lang = lang;

    // Check for page-specific meta tags
    const pageType = document.body.getAttribute('data-page');
    
    if (pageType && langData.pages && langData.pages[pageType]) {
        // Use page-specific meta tags
        const pageMeta = langData.pages[pageType];
        
        if (pageMeta.title) {
            document.title = pageMeta.title;
            const pageTitleEl = document.getElementById('pageTitle');
            if (pageTitleEl) pageTitleEl.textContent = pageMeta.title;
        }
        
        if (pageMeta.description) {
            const metaDescEl = document.getElementById('metaDescription');
            if (metaDescEl) metaDescEl.setAttribute('content', pageMeta.description);
        }
        
        // Update page heading if exists
        const pageHeadingEl = document.querySelector('[data-i18n-heading]');
        if (pageHeadingEl && pageMeta.heading) {
            pageHeadingEl.textContent = pageMeta.heading;
        }
        
        // Update page subtitle/updated if exists
        const pageSubtitleEl = document.querySelector('[data-i18n-subtitle]');
        if (pageSubtitleEl) {
            if (pageMeta.subtitle) {
                pageSubtitleEl.textContent = pageMeta.subtitle;
            } else if (pageMeta.updated) {
                pageSubtitleEl.textContent = pageMeta.updated;
            }
        }
    } else {
        // Use default meta tags for landing page
        const meta = langData.meta;
        if (meta) {
            document.title = meta.title;
            const pageTitleEl = document.getElementById('pageTitle');
            if (pageTitleEl) pageTitleEl.textContent = meta.title;

            const metaDescEl = document.getElementById('metaDescription');
            if (metaDescEl) metaDescEl.setAttribute('content', meta.description);

            const metaKeywordsEl = document.getElementById('metaKeywords');
            if (metaKeywordsEl) metaKeywordsEl.setAttribute('content', meta.keywords);
        }
    }
}

/**
 * Get saved language or default
 */
function getSavedLanguage() {
    return localStorage.getItem('voxi_lang') || 'en';
}

/**
 * Save language preference
 */
function saveLanguage(lang) {
    localStorage.setItem('voxi_lang', lang);
}

/**
 * Toggle between languages
 */
function toggleLanguage() {
    const currentLang = getSavedLanguage();
    const newLang = currentLang === 'en' ? 'ru' : 'en';
    
    saveLanguage(newLang);
    applyTranslations(newLang);
}

/**
 * Initialize i18n on page load
 */
function initI18n() {
    const savedLang = getSavedLanguage();
    applyTranslations(savedLang);

    // Attach click handler to language switcher
    const langSwitcher = document.getElementById('langSwitcher');
    if (langSwitcher) {
        langSwitcher.addEventListener('click', toggleLanguage);
    }
}

// Initialize when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initI18n);
} else {
    initI18n();
}

