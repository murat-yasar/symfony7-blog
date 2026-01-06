# A Simple Web-blog which is created with Symfony7


## A. Project Setup
### 1. Install Symfony
`shell
brew install symfony-cli/tap/symfony-cli
`

### 2. Create a Symfony Project
`shell
symfony new symfony7-blog
`

### 3. Install Symfony Twig
`shell
composer require symfony/twig-bundle
`

### 4. Install Symfony/maker-bundle
`shell
composer require symfony/maker-bundle --dev
`

### 5. Start the Server
`shell
symfony serve
`

### 6. Open the page on browser
http://127.0.0.1:8000/



## B. Project Development
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

