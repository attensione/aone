### https://www.tiepphan.com/practical-react-project-structure-2024/

### Styles

The styles folder contains style css of the project. Here we can store component-based custom styles.
styles folder react structure 2024

### Assets

The assets folder contains all images, css files, font files, etc… for your project.

### Context

The context folder stores all your React context files that used to share states between components each other. There are large projects you will have multiple context you use across your application. If you are using a different state manage such as Redux, you can replace this folder for share states.

### Configs

The configs folder contains config files where we store environment variables. We will use this folder to setup configurations in your application. Besides you can use it to stores constant variables, then we just change a place, and they will apply for all placed that used.

### Layouts

The layouts folder contains dynamic layout that you want display based on your client’s information. This would be things like a sidebar, navbar, etc… If your application only has a layout then you can just place it in the components folder, but if you have multiple different layouts used across your application this is a great place to store them.

### Helpers

The helpers folder contains utilities functions. You should be store pure functions on this folder. This mean is each function will have its own responsibilities.

### Hooks

The hooks folder contains the hooks function to can reuse code logic for all components, and it uses to separate between code logic and your components. So your component just simple show render UI.

### Services

The services folder contains all your code for interface with any external API. On large projects you will have many different APIs you need to access and this folder is the place to put the code that interact with those APIs.

### Types

If your applications created by react typescript. You can use this folder to contains interfaces, types that you use to define on components. This folder easy uses to share interfaces across components.

### States

The states folder will be added if you use redux in your project. There are 2 folders named actions, reducers to manage states. They will be called in almost all the pages, so create actions, reduces according to pages name.

### Components

This folder is very important in your project. Components are the building blocks of any react project. This folder contains collections UI components like button, card, modal, input, etc…, that can be used across various files in the project.

### Pages

The final folder that the pages folder indicate the route of the react application. Each file in this folder contains its route. A page can contain its sub folder. And every sub folder represent its own route. This folder is confused for yourself when you identify which components are in the pages folder, or in the feature folder. So, I propose we can reference ways the NextJS framework using app router to separate components.