# dev-menu
Version 1 Beta of menu planner on Laravel 6.18.3

In version 1 I'm creating for my wife just a simple menu planner for the next week/month.

I've added quick admin panel to not waste time on creating user permissions. 
But rest will create on my own. This panel doesn't have polymorphic relationships and will do them by hand in Tinker.

In this version will add Laravelista commentable package for comments.

Logged in user can add and edit, for now no preview yet for guests. Everything require authentication.

Users share database, no profile menu segragated yet for each member.

There's a chat built in so that members can communicate.

There are notifications built in, will connect them with new meal when added just before releasing official version 1.

What I plan for Version 2 and more:

1. To make SaaS for each user to be segragated from each other. This way more users can plan their own meals.
2. To add access to global search and from global DB import meals to individual account planner.
3. To add meal by diet type.
4. To re-create ingredients, to be not as a description anymore, but to be each separated and with quantity.
5. Add ingredients as individual feature to create meals.
6. Create shopping list out of ingredients.
7. Create API to integrate with shops online.
8. Add geo location to find local shops and our communities with local meetings.
9. Add reward program.
10. Add achievements and plan goals as an additional feature for each member.
