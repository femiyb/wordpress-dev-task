# wordpress-dev-task

When working with us, you will have to implement themes covering all WordPress defaults like posts, pages, archives, comments, etc. But you will also assist our plugin developers in providing templates for specific implementations like custom PostTypes, custom Taxonomies, Widgets, and so on.

We don't ship such custom code to themes, which means that you will have to work together with our plugin developers to provide them templates and front-end implementations.

With the Gutenberg Block editor, a lot of requirements have increased. Now it is not only important to build templates on top of an easy-to-use API that our backend developers provide. Now you will have to touch the backend of WordPress by creating new Gutenberg blocks and fields that are either server-side rendered or directly by using React and JSX and storing them into the post_content.


Setup code versioning
Please create a private GitHub repository where you can track progress and commit your work at the end of the day. Please make sure it is not visible to the public, and you only give access to jobs@inpsyde.com.

Please only provide the access once you are completely done with the task and email us the link to your repo.

Requirements
For our Client John Doe, you will have to build a new plugin that can be used in the existing WordPress setup (the latest WordPress can be used). The customer wants a new overview of all persons of his company. A single person contains the following fields:

First/Lastname
Short description
Image of person
Position in the company (such as CEO, Project Manager, Developer)
Social Network Links
GitHub,
LinkedIn,
Xing,
Facebook
The person itself has no single page and is not visible on any archive. A person can be selected by their name and inserted into the "post_content" of the postType "page". The output will contain the "Image", "First/Lastname" and "Position". When clicking on that element, a small overlay/modal will open to show the "First/Lastname", "Short description", and the "Social Links".

Some hints
PHP 7+
Webpack
React
ES6/Typescript
Composer
No JQuery, Bootstrap, Angular or additional frameworks. WordPress is the framework, and it should work solid and be maintainable
Describe your decisions in README (short is better)
https://developer.wordpress.org/block-editor/handbook/tutorials/create-block/
What we expect
Definitely not the one perfect overall solution. Our goal is to see if you can implement the requirements easily and quickly, creating an easy to maintain and future-proof solution. This is more a kind of "working MVP" which we often have to ship to our customers to show the possibilities of WordPress. Please make sure that the solution is ready for usage with Composer and the Block Editor.

About Composer dependencies
Composer support is mandatory, and pulling packages via Composer is an allowed practice. And because both tests and code style checks are required, some development dependencies will be there.

It is also allowed to use dependencies for production code. That said, we appreciate it when dependencies are kept to the very essential. Please use the README to briefly explain why a Composer package has been added.

At Inpsyde, we use Composer to manage the whole website code.
We use it to install WordPress itself, alongside all plugins and themes, and we load Composer autoload in wp-config.php. We will appreciate it if the delivered plugin will be compliant with this workflow.

Additional mandatory features
Full Composer support
A README, in English, using markdown, explaining plugin usage and decisions behind implementation
Compliance with Inpsyde code style for the PHP Level, if necessary
Object-oriented code
Automated tests
A license, preferably in a LICENSE file in the repository root. We don’t require any specific license, nor will we ever share your work without your permission. The license should, at a very minimum, allow us to access and store your work. If you want to use an OS license, feel free to do so.
Usage of the WordPress native functionalities whenever possible (don’t reinvent the wheel).
The lack of optional features will not generate a negative evaluation. But truth to be told, we can’t say the same about poorly implemented optional features.

Now it is your turn…
We hope that everything about the assigned task is clear, and if not, we are more than happy to clarify anything you need us to. Let us know, and we will get back to you as soon as we can.

To be considered for the role, please provide us with your best possible result. Think of it as your first job interview and make sure that you meet as many requirements as possible. You can take your time. There are no time constraints.

Thank you again for applying. We hope this could be the first step toward your path to Inpsyde!

If we like your code, then we will invite you to an interview via video conferencing as a next step to get to know you personally.

For now, we wish you happy coding and the best of luck!