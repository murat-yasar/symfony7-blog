# A Simple Web-blog which is created with Symfony 7.4


## A. Project Setup
### 1. Install Symfony
`shell
brew install symfony-cli/tap/symfony-cli
`

### 2. Install Symfony Twig
`shell
composer require symfony/twig-bundle
`

### 3. Install Symfony Maker
`shell
composer require symfony/maker-bundle --dev
`

### 4. Install Symfony Doctrine (for DB manipulation)
`shell
composer require symfony/orm-pack
`

### 4. Install ORM-fixtures (for DB testing)
`shell
composer require orm-fixtures --dev
`

### 4. Install Symfony Profiler (for development)
`shell
composer require symfony/profiler-pack --dev
`

### 5. Install Symfony Form (to create forms)
`shell
composer require symfony/form
`





## B. Project Development
### 0. Create the Project
   - Create a symfony project:   `symfony new project_name`
   - Open the project:           `cd project_name && code .`
   - Start the server:           `symfony serve`
   - Open the page on browser: 'http://127.0.0.1:8000/'

### 1. Create HomeController (src/controller/)
   - Define the namespace (App\Controller)
   - Include necessary Symfony Components (Response, Route, etc.)
   - Create an index function
   - Return the output with response

### 2. Create index.html  (src/templates/)
   - Create home directory
   - Create index.html.twig
   - Include base.html.twig
   - Wrap in body block

### 3. Create DB (posts)
   - Change .env file for DB
   - Create DB (posts): `php bin/console doctrine:database:create`
   - Check db file in var directory and src/Entity
   - Create entity (post): `php bin/console make:entity entity_name`
   - Add tables to the entity: title (string), text, datetime
   - Create the migration code: `php bin/console make:migration`
   - Migrate the tables `php bin/console doctrine:migrations:migrate`
   - Create test objects using orm-fixtures (src/DataFixtures/AppFixtures.php)
   - Write test objects into DB: `php bin/console doctrine:fixtures:load`
   - Check DB: `php bin/console dbal:run-sql "SELECT * FROM post"`
   - Display the data in frontend (src/Controller/PostController.php)
   - Check the data in frontend (dump, or dd methods)

### 4. Add Navigation and Footer
   - Connect TailwindCSS with CDN (templates/base.html.twig)
   - Add a Navigation with home and posts links before {% body %} block
   - Add a Footer after {% body %} block

### 5. Add Show component
   - Define Show function to display a single post (PostController.php)
   - Define Route to Show function (PostController.php)
   - Define Show twig ((templates/post/show.html.twig)

### 6. Add New component
   - Install symfony/form
   - Define New function to create a new post (PostController.php)
   - Define Route to New function (PostController.php)
   - Define New twig ((templates/post/new.html.twig)