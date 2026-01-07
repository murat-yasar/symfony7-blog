# A Simple Web-blog which is created with Symfony7


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

### 4. Install Symfony Doctrine
`shell
composer require symfony/orm-pack
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

### 3. Create DB
   - Change .env file for DB
   - Create DB: `php bin/console doctrine:database:create`
   - Check db file in var directory

