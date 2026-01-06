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

### 3. Start the Server
`shell
symfony serve
`

### 4. Open the page on browser
http://127.0.0.1:8000/



## B. Project Development
### 1. Create HomeController (src/controller)
   - Define the namespace (App\Controller)
   - Include necessary Symfony Components (Response, Route, etc.)
   - Create an index function
   - Return the output with response
