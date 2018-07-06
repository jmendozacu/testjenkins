# Magallanes #

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/9346cdd1-9525-480c-b7b8-411e39b0c199/mini.png)](https://insight.sensiolabs.com/projects/9346cdd1-9525-480c-b7b8-411e39b0c199) [![Coverage Status](https://coveralls.io/repos/magephp/magallanes/badge.svg?branch=master&service=github)](https://coveralls.io/github/magephp/magallanes?branch=master) [![Build Status](https://travis-ci.org/magephp/magallanes.svg)](https://travis-ci.org/magephp/magallanes)

### What's Magallanes? ###
Magallanes is a deployment tool for PHP applications; it's quite simple to use and manage.
It will get your application to a safe harbor.


### So, What can it do? ###
You can instruct Magallanes to deploy your code to all the servers you want (eg: rsync over ssh),
and run tasks for that freshly deployed code.

### How can I install it via composer? ###

Simply add the following dependency to your project’s composer.json file:

```json
"require-dev": {
    "magephp/magallanes": "~1.1"
}
```
Now tell we update the vendors:

```bash
$ composer update magephp/magallanes
```

And finally we can use Magallanes from the vendor's bin:

```bash
$ bin/mage version
```

### System-wide installation with composer ###

```bash
$ composer global require "magephp/magallanes=~1.1.*"
```

Make sure you have ~/.composer/vendor/bin/ in your path.
You can now use Magallanes by using the ````mage```` command.

### Can you give me some examples/ideas? ###
**Sure!**
Suppose you have a checkout of your app and you have to deploy it to four servers;
and after each deploy you have to run some boring tasks, like fixing file permissions, creating symlinks, etc.
You can define all this on Magallanes and with *just one command* you can do all this at once!

Like this:
```
$ mage deploy to:production
```

### What's this sorcery?! ###
Easy boy. It's not sorcery, just some *technomagick*!

In Magallanes you define environments like *testing*, *staging*, or *production* like on the example above.
Then, on that environment, you can configure a setup specifying to which hosts you want to deploy and what tasks to run (*after*, *on*, and *before* deploying).
And you are done!


### This is awesome! Where can I learn more? ###
You can read the whole source code (naaah!); or checkout the documentation at: https://magephp.github.io


Enjoy your magic trip with **Magallanes** to the land of the easily deployable apps!!

### "develop" branch ###
Please, all pull request now must be on the develop branch. Thanks!
