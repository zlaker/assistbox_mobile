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

        // Navigation
        nav: {
            home: 'Home',
            features: 'Features',
            statistics: 'Statistics',
            whyVoxi: 'Why Voxi',
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

        // Navigation
        nav: {
            home: 'Главная',
            features: 'Возможности',
            statistics: 'Статистика',
            whyVoxi: 'Почему Voxi',
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

