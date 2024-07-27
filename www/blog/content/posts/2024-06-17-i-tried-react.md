# I tried React

I'm not a software engineer. I wanted to get a sense of what my engineering counterparts have to deal with and understand the common criticisms I've heard of React.

Here is my ranty report.

## Syntax
JSX throws HTML and JavaScript together in a confusing syntax. The mix of markup and logic was visually and cognitively taxing. It felt like reading a screenplay where the dialogue and narration blend together. My javascript game isn't great, let alone good code hygiene, so I got rough ride:

- Mismatched braces, parentheses, or missing semicolons can cause cryptic errors in JSX
- Unlike HTML, JSX lets some elements be lazy and skip their closing tags, I don't like that, that incentive poor syntax IMO
- Linters were a decent code babysitters, but far from perfect - I got a bunch of silent errors
- Constantly switching between writing HTML-like structures and pure Javascript logic was rough (but then again, I'm the noob here)
- As a designer I created way too many props for my components, trying to replicate CSS and figma component logic
- Is a clean DOM even possible with React??

## Customization
Sure, it's customizable, but that also means the codebase quickly be a mess. I can imagine that without strong conventions for large teams, this would be a big issue. React supposedly thrives on components, but managing them even in a small project turned into a component soup. For the love of code, have a plan (beyond "just using storybook") to tame the flexibility.

The Virtual DOM is supposed to be React's magic behind the scenes. I don't get the hype (especially for 90% of my static site uses). The extra computation and debugging issues add to the overall complexity... I get the idea of efficient DOM updates but it's not worth the headache. 

## Ecosystem
I haven't dabbled for more than 3 weeks but already got a taste of the ecosystem whirlwind of updates and changes. I can see it being cool for keeping things fresh, but anxiogenic for developers who just want to build something and ship it. React itself is a library, not a full-fledged framework - It took me a while to realize what this meant in practice. Choice overload and inconsistent codebase are massive drags that even Copilot didn't ease much. I barely understood all the stuff I had to install... just do send a form.

In some ways React feels like IKEA for your app. You get the basic pieces, but you gotta hunt down all the nuts and bolts (libraries) to make it actually work. Routing, state management - all separate libraries you need to install, manage, and hope they don't fight with each other. So many version conflicts...

---

TLDR: I didn't like my experience but then again, I'm not a trained or experienced developer. I'm content coding basic php and jquery. After this react stint I feel a rush of empathy for those having to deal with this daily.

If you work with react, I feel you

---

P.S: Here is what I was trying to build: An under-engineered notes app with only 2 task lists: Work and Life. Simple design, no menu, no rich text, no labels, no search, no customization. A markdown file associated to each list for notes and that's it. I got 45% there with react. I might reboot the project with php/jquery... to be continued


![A minimal notes app with 2 task lists and one note md file associated to each](https://slrncl.com/blog/content/img/react-notes-app.jpg)
