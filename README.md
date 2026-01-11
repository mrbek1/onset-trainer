<h1>onSET Trainer — C-Test Preparation Platform<br></h1>
<h2>English version<br></h2>
Overview:<br>
onSET Trainer is a web-based platform for preparing for the onSET (online Screening Test), focusing on the C-Test format used by German universities.<br>
The project is developed as a real-world, production-like system, while simultaneously serving as a learning-by-building project for the team.<br>
<br>
Project Goals:<br>
To create a real training tool for onSET preparation and thereby add new functionality to the existing project yabek.uz. <br>
<br>
Plans:<br>
Plan A (MVP – closed mode):<br>
Real C-Test texts<br>
Correct / incorrect validation only<br>
Timer and attempt statistics<br>
No explanations (exam-like simulation)<br>
<br>
Plan B (extended):<br>
Generated or custom-created texts<br>
Advanced analytics<br>
Error explanations and learning feedback<br>
Architecture<br>
<br>
The project follows a service-oriented architecture:<br>
WordPress Plugin — UI, test logic, statistics<br>
Backend API (Python) — PDF/image text extraction, OCR, C-Test parsing<br>
Infrastructure — Docker, Nginx, CI/CD<br>
Each component is developed independently but integrated via HTTP/JSON.<br>
<br>
Repository Structure:<br>
onset-trainer/<br>
  wp-plugin/   # WordPress plugin (UI, admin panel, test logic)<br>
  backend/     # Python backend API (OCR, PDF processing, parsing)<br>
  infra/       # Docker, Nginx, CI/CD, deployment configs<br>
  docs/        # Architecture, API contract, project rules<br>
<br>
Team & Responsibilities:<br>
Odilbek — WordPress Developer<br>
WordPress plugin, admin interface, test engine, API integration<br>
<br><br>
Fayozbek — Backend Developer (Python)<br>
REST API, PDF/OCR processing, text normalization, C-Test parser<br>
<br><br>
Salmon — DevOps Engineer<br>
Docker, reverse proxy, HTTPS, CI/CD, deployment automation<br>
<br><br>
Development Approach:<br>
Monorepo with strict folder separation<br>
Feature-based branches<br>
No direct commits to main<br>
Clear API contract between frontend and backend<br>
Focus on stability and production-ready practices<br>
<br>
Status:<br>
🚧 In active development (MVP – Plan A)<br>
<br><br>
<h2>Русская версия<br></h2>
Обзор:<br>
onSET Trainer — это веб-платформа для подготовки к экзамену onSET (online Screening Test), с фокусом на формат C-Test, используемый в немецких университетах.<br>
Проект разрабатывается как реальный продукт, максимально приближённый к production-среде, и одновременно служит учебно-практическим проектом для команды.<br>
<br>
Цели проекта:<br>
Создать реальный тренажёр для подготовки к onSET, тем самым добавить новый функционал существующему проекту yabek.uz <br>
<br>
Планы:<br>
План A (MVP — закрытый режим)<br>
Реальные тексты C-Test<br>
Проверка «правильно / неправильно»<br>
Таймер и статистика попыток<br>
Без объяснений (имитация экзамена)<br>
<br>
План B (расширенный)<br>
Генерация или собственные тексты<br>
Расширенная аналитика<br>
Объяснения ошибок и обучение<br>
Архитектура<br>
<br>
Проект построен по сервисной архитектуре:<br>
WordPress-плагин — интерфейс, логика теста, статистика<br>
Backend API (Python) — извлечение текста из PDF/изображений, OCR, парсинг C-Test<br>
Инфраструктура — Docker, Nginx, CI/CD<br>
Компоненты независимы и взаимодействуют через HTTP/JSON.<br>
<br>
Структура репозитория<br>
onset-trainer/<br>
  wp-plugin/   # WordPress-плагин (UI, админка, логика теста)<br>
  backend/     # Backend API (OCR, PDF, обработка текста)<br>
  infra/       # Docker, Nginx, CI/CD, деплой<br>
  docs/        # Архитектура, API-контракты, правила проекта<br>
<br>
Команда и роли:<br>
Одилбек — WordPress Developer<br>
Плагин, админка, движок тестирования, интеграция с API<br>
<br>
Фаезбек — Backend Developer (Python)<br>
REST API, OCR, нормализация текста, парсер C-Test<br>
<br>
Салмон — DevOps Engineer<br>
Docker, прокси, HTTPS, CI/CD, автоматизация деплоя<br>
<br>
Подход к разработке:<br>
Monorepo с чётким разделением зон ответственности<br>
Отдельная ветка под каждую задачу<br>
Запрет прямых коммитов в main<br>
Чёткий API-контракт<br>
Фокус на production-подход<br>
<br>
Статус:<br>
🚧 В активной разработке (MVP — План A)
