courseBasicSymfony4
===================

Course Basic Symfone 4 from site SymfonyCasts
---------------------------------------------

This a simple project, just following the instruction of the course for learn.
Source [SymfoneCast](https://symfonycasts.com/screencast/symfony).

Installing
---------------------------------------------
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
6. Packages
    6,1. Routes
        `composer require annotations`
    6,2. Security Checker
        `composer require sec-checker`
    6,3. Twig (views system)
        `composer require twig`
    6,4. 
        `composer require profiler --dev`
    6,5. Debug bar
        `composer require debug --dev`
        - Unpack debug package
            `composer unpack debug`
    6,6. Assets
        `composer require asset`