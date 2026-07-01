<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::query()->updateOrCreate(
            ['title' => 'Voxi Book Player 3.1 — What\'s New'],
            [
                'text' => <<<'MD'
**Voxi Book Player 3.1** is coming soon to the App Store.

### Highlights

- Wi‑Fi and OPDS downloads import directly into your library
- Add books to collections from book details; filter library by shelf
- Sort by series, next-volume banner, and auto-continue when a book finishes
- Widget tap opens the app and resumes playback (`voxibook://continue` deep link)
- iCloud sync for settings and statistics — not just playback progress
- Audio EQ presets for clearer speech (voice, podcast, bass reduce)
- CarPlay: series section and tap to start any book

Plus everything from 3.0.0: Continue Listening widget, Siri Shortcuts, onboarding, collections, OPDS, Wi‑Fi Transfer, and more.

---

**Voxi Book Player 3.1** скоро выйдет в App Store.

### Главное

- Wi‑Fi Transfer и OPDS импортируют файлы сразу в библиотеку
- Добавление книг в коллекции из карточки книги; фильтр библиотеки по полкам
- Сортировка по сериям, баннер следующего тома и автопродолжение серии
- Нажатие на виджет открывает приложение и возобновляет воспроизведение (`voxibook://continue`)
- Синхронизация настроек и статистики через iCloud — не только прогресса
- EQ-пресеты для более чёткой речи (voice, podcast, bass reduce)
- CarPlay: раздел серий и запуск любой книги одним нажатием

Плюс всё из 3.0.0: виджет, Siri, onboarding, коллекции, OPDS, Wi‑Fi Transfer и другое.
MD,
            ]
        );
    }
}
