onSET Trainer — C-Test Preparation Platform
English version
Overview:
onSET Trainer is a web-based platform for preparing for the onSET (online Screening Test), focusing on the C-Test format used by German universities.
The project is developed as a real-world, production-like system, while simultaneously serving as a learning-by-building project for the team.

Project Goals:
To create a real training tool for onSET preparation and thereby add new functionality to the existing project yabek.uz. 

Plans:
Plan A (MVP – closed mode):
Real C-Test texts
Correct / incorrect validation only
Timer and attempt statistics
No explanations (exam-like simulation)

Plan B (extended):
Generated or custom-created texts
Advanced analytics
Error explanations and learning feedback
Architecture

The project follows a service-oriented architecture:
WordPress Plugin — UI, test logic, statistics
Backend API (Python) — PDF/image text extraction, OCR, C-Test parsing
Infrastructure — Docker, Nginx, CI/CD
Each component is developed independently but integrated via HTTP/JSON.

Repository Structure:
onset-trainer/
  wp-plugin/   # WordPress plugin (UI, admin panel, test logic)
  backend/     # Python backend API (OCR, PDF processing, parsing)
  infra/       # Docker, Nginx, CI/CD, deployment configs
  docs/        # Architecture, API contract, project rules

Team & Responsibilities:
Odilbek — WordPress Developer
WordPress plugin, admin interface, test engine, API integration

Fayozbek — Backend Developer (Python)
REST API, PDF/OCR processing, text normalization, C-Test parser

Salmon — DevOps Engineer
Docker, reverse proxy, HTTPS, CI/CD, deployment automation

Development Approach:
Monorepo with strict folder separation
Feature-based branches
No direct commits to main
Clear API contract between frontend and backend
Focus on stability and production-ready practices

Status:
🚧 In active development (MVP – Plan A)

Русская версия
Обзор:
onSET Trainer — это веб-платформа для подготовки к экзамену onSET (online Screening Test), с фокусом на формат C-Test, используемый в немецких университетах.
Проект разрабатывается как реальный продукт, максимально приближённый к production-среде, и одновременно служит учебно-практическим проектом для команды.

Цели проекта:
Создать реальный тренажёр для подготовки к onSET, тем самым добавить новый функционал существующему проекту yabek.uz 

Планы:
План A (MVP — закрытый режим)
Реальные тексты C-Test
Проверка «правильно / неправильно»
Таймер и статистика попыток
Без объяснений (имитация экзамена)

План B (расширенный)
Генерация или собственные тексты
Расширенная аналитика
Объяснения ошибок и обучение
Архитектура

Проект построен по сервисной архитектуре:
WordPress-плагин — интерфейс, логика теста, статистика
Backend API (Python) — извлечение текста из PDF/изображений, OCR, парсинг C-Test
Инфраструктура — Docker, Nginx, CI/CD
Компоненты независимы и взаимодействуют через HTTP/JSON.

Структура репозитория
onset-trainer/
  wp-plugin/   # WordPress-плагин (UI, админка, логика теста)
  backend/     # Backend API (OCR, PDF, обработка текста)
  infra/       # Docker, Nginx, CI/CD, деплой
  docs/        # Архитектура, API-контракты, правила проекта

Команда и роли:
Одилбек — WordPress Developer
Плагин, админка, движок тестирования, интеграция с API

Фаезбек — Backend Developer (Python)
REST API, OCR, нормализация текста, парсер C-Test

Салмон — DevOps Engineer
Docker, прокси, HTTPS, CI/CD, автоматизация деплоя

Подход к разработке:
Monorepo с чётким разделением зон ответственности
Отдельная ветка под каждую задачу
Запрет прямых коммитов в main
Чёткий API-контракт
Фокус на production-подход

Статус:
🚧 В активной разработке (MVP — План A)
