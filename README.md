# TaskBoard: Laravel Workspace and Task Manager

TaskBoard is a user-friendly Laravel web app to help you organize your work and boost productivity. Create workspaces, add and manage tasks for each workspace, and enjoy a clean, intuitive interface that makes getting things done easy.

---

## Features

- **Workspaces:** Organize your projects into separate, dedicated workspaces.
- **Tasks:** Quickly add, edit, and delete your to-dos within any workspace.
- **Priorities:** Assign priorities to your tasks to focus on what's most important.
- **Easy Navigation:** Seamlessly switch between workspaces.
- **Responsive UI:** Clean, accessible interface for desktop and mobile.

---

## Getting Started

### Prerequisites

- PHP >= 8.1
- Composer
- Node.js & npm (for frontend assets)
- MySQL or a compatible database

### Installation

1. **Clone the repository:**
   ```sh
   git clone https://github.com/Vyshnavi-Gadaparthi/laravel-task-manager.git
   cd laravel-task-manager
   ```

2. **Install dependencies:**
   ```sh
   composer install
   npm install
   npm run build
   ```

3. **Set up your environment:**
   ```sh
   cp .env.example .env
   ```
   Update your database credentials and other settings in `.env`.

4. **Run migrations:**
   ```sh
   php artisan migrate
   ```

5. **Generate application key:**
   ```sh
   php artisan key:generate
   ```

6. **Serve the application:**
   ```sh
   php artisan serve
   ```
   Open [http://localhost:8000](http://localhost:8000) in your browser.

---

## Usage

- Click "Create Workspace" to start organizing your work.
- Inside each workspace, add tasks and assign them a priority.
- Edit or delete tasks as needed.
- Easily navigate between workspaces.

---

## Screenshots

*(Add screenshots here to show off the UI!)*

---

## Contributing

Contributions are welcome! Please open issues or pull requests for any features, bug fixes, or suggestions.

---

## License

This project is open-source and available under the [MIT License](LICENSE).

---

## Credits

Built with [Laravel](https://laravel.com/) and care by Vyshnavi Gadaparthi.

---