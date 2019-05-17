courseBasicSymfony4
===================

Course Basic Symfone 4 from site SymfonyCasts
---------------------------------------------

This a simple project, just following the instruction of the course for learn.
Source [SymfoneCast Stellar Development with Symfony 4](https://symfonycasts.com/screencast/symfony).

Installing
----------

1. Download and install Composer
2. Update COmposer
    `composer self-update`
3. Install Symfony and create project
    `composer create-project symfony/skeleton the_spacebar`
4. Startign Web Server
    `cd the_spacebar`
    `php -S 127.0.0.1:8000 -t public`
5. Installing Server (simplest command) (optional)
    `composer require server`
    `./bin/console server:run`


Package Installed
----------
- Routes
    `composer require annotations`
- Security Checker
    `composer require sec-checker`
- Twig (views system)
    `composer require twig`
- 
    `composer require profiler --dev`
- Debug bar
    `composer require debug --dev`
    - Unpack debug package
        `composer unpack debug`
- Assets
    `composer require asset`