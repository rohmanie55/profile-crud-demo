# Laravel CRUD Application README

This repository contains a simple Laravel application demonstrating CRUD (Create, Read, Update, Delete) operations for user profiles.

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/rohmanie55/profile-crud-demo.git
    ```

2. **Navigate to the project directory:**

    ```bash
    cd profile-crud-demo
    ```

3. **Install dependencies:**

    ```bash
    composer install && npm install && npm run build
    ```

4. **Create a copy of the `.env.example` file and rename it to `.env`. Update the database configuration according to your environment:**

    ```bash
    cp .env.example .env
    ```

5. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

6. **Run migrations to create the necessary database tables:**

    ```bash
    php artisan migrate
    ```

7. **Start the development server:**

    ```bash
    php artisan serve
    ```

## Usage

Once the server is running, you can access the application by visiting `http://localhost:8000` in your web browser.

The application provides basic CRUD functionalities for user profiles:

- **Create:** Click on the "Create New Profile" button to create a new user profile.
- **Read:** View the list of existing user profiles on the homepage. Click on a profile to view its details.
- **Update:** Edit a user profile by clicking on the "Edit" button on the profile details page.
- **Delete:** Delete a user profile by clicking on the "Delete" button on the profile details page.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please feel free to open an issue or submit a pull request.

## License

This project is open-source and available under the [MIT License](LICENSE).

## Acknowledgements

This application was built using the Laravel framework. Special thanks to the Laravel community for their contributions and support.
