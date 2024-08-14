## Task 2

Get User Product

- /products/{user_id}


### Has Many Through
The "has-many-through" relationship provides a convenient way to access distant relations via an intermediate relation. For example, let's assume we are building a deployment platform like Laravel Vapor. A Project model might access many Deployment models through an intermediate Environment model. Using this example, you could easily gather all deployments for a given project. Let's look at the tables required to define this relationship:
