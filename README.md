courseBasicSymfony4
===================

Course Basic Symfone 4 from site SymfonyCasts
---------------------------------------------

This a simple project, just following the instruction of the course for learn.<br />
Source [SymfoneCast Stellar Development with Symfony 4](https://symfonycasts.com/screencast/symfony).<br />
Source [SymfoneCast Symfony 4 Fundamentals: Services, Config & Environments
](https://symfonycasts.com/screencast/symfony-fundamentals).

Installing
----------

1. Download and install Composer
2. Update COmposer<br />
    `composer self-update`
3. Install Symfony and create project<br />
    `composer create-project symfony/skeleton the_spacebar`
4. Startign Web Server<br />
    `cd the_spacebar`<br />
    `php -S 127.0.0.1:8000 -t public`
5. Installing Server (simplest command) (optional)<br />
    `composer require server`<br />
    `./bin/console server:run`

note: sometimes you cgoing to need clean cache with this command `./bin/console cache:clear`

Package Installed
-----------------
- Routes<br />
    `composer require annotations`
- Security Checker<br />
    `composer require sec-checker`
- Twig (views system)<br />
    `composer require twig`
- <br />
    `composer require profiler --dev`
- Debug bar<br />
    `composer require debug --dev`<br />
    - Unpack debug package<br />
        `composer unpack debug`
- Assets<br />
    `composer require asset`
- KnpMarkdownBundle<br />
    `composer require knplabs/knp-markdown-bundle`
- Slack BUndle<br />
    `composer require nexylan/slack-bundle php-http/guzzle6-adapter:1.1.1`
- Maker Bundle<br />
    `composer require maker --dev`
