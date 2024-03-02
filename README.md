| No. | Required Dependencies | Version  |
| --- | --------------------- | -------- |
| 1.  | Node                  | v20.10.0 |
| 2.  | npm                   | 10.2.3   |
| 3.  | tsc                   | 5.3.3    |

### Cloning the Repository and Setup:

To clone this repository and set up the project, execute the following commands in sequence:

```bash
git clone git@github.com:karolliszniewski/webpack-ts-scss-template.git
cd webpack-ts-scss-template
npm install
npm run build
npm run start
git remote remove origin
git remote add new_repository_link
```

# WordPress Theme for best-home-decor.co.uk

Welcome to the repository for the WordPress theme designed for best-home-decor.co.uk. This theme is based on a simple and elegant design created in Figma.

## Getting Started

### Initial Design Setup

Start by implementing the basic design for the blog page, as outlined in the [Figma design](https://www.figma.com/file/H5o2vEkH0mv9NcHWGCQt45/Untitled?type=design&mode=design&t=0Xxh1dmZiEJWyPAY-1).

![Blog Page Design](https://github.com/karolliszniewski/WordpressTheme-best-home-decor.co.uk/assets/105976690/8756c024-2a13-4928-b779-dc9642d6a487)

### Progress 1.0: Adding Icons and Logo

Incorporate icons from the Google Fonts library and set the background and text to create a distinctive logo.

![Icons and Logo](https://github.com/karolliszniewski/WordpressTheme-best-home-decor.co.uk/assets/105976690/72c8f136-f960-4c61-b786-1b1732bb5bc8)

## Progress 1.1 - Mobile Menu Responsiveness

### Overview

In this release (version 1.1), I've implemented a responsive mobile menu that seamlessly adapts to both mobile and desktop versions of the website. The mobile menu is designed to either automatically enable on smaller screens or trigger when the screen size exceeds 1000px.

### Features

- **Mobile Menu Responsiveness:** The mobile menu is optimized for a smooth user experience on various devices, ensuring functionality on both mobile and desktop platforms.

### Preview

![Mobile Menu Preview](https://github.com/karolliszniewski/WordpressTheme-best-home-decor.co.uk/assets/105976690/6c1e2ca9-c14b-4458-acbc-25b5e532e123)

![image](https://github.com/karolliszniewski/WordpressTheme-best-home-decor.co.uk/assets/105976690/37014610-3e0d-4294-a40f-278a3e4f84aa)

# Progress 1.2 Update

In this update (Progress 1.2), I've incorporated WordPress theme files into the primary project folder named 'speed.' The theme is built using the singleton design pattern, featuring an autoloader and namespaces.

---

**Design Pattern:**

- Singleton
- Autoloader
- Namespaces

# Progress 1.3 Update

In the recent update, I've implemented several significant changes:

1. **Introduction of Simple API:** The project now features a straightforward API that sends me information when someone clicks on a link.

2. **CSS Styling for Blog Posts:** The styling for blog posts is now completed. Post content is automatically generated from my database using a custom script, avoiding the use of WordPress.

3. **Speed Score:** The current Speed Score results look promising.

   ![Screenshot 2024-01-24 184013](https://github.com/karolliszniewski/WordpressTheme-best-home-decor.co.uk/assets/105976690/4c7310bd-588f-4642-8a0f-0149228ecd8a)
   ![Screenshot 2024-01-24 182333](https://github.com/karolliszniewski/WordpressTheme-best-home-decor.co.uk/assets/105976690/8b19370d-a26f-43c4-95cf-aa7def0a65a8)
   ![Screenshot 2024-01-24 182342](https://github.com/karolliszniewski/WordpressTheme-best-home-decor.co.uk/assets/105976690/77c08709-7361-460d-aa80-391166caf59c)
   ![Screenshot 2024-01-24 182355](https://github.com/karolliszniewski/WordpressTheme-best-home-decor.co.uk/assets/105976690/74953f05-fe3c-4644-aa9d-d6a816df1104)


# Progres 1.4 - Single Product, Product Archive, My Account

**Note:** There are some bugs in the mobile version images because the Chrome plugin to capture scrolled pages has some issues, but you can see that the design is fully responsive.

## Single Product
Additionally, there is a slider for images made in pure TypeScript without any other libraries. You can use arrows to slide left/right, but on mobile, you can also use touch. There is a zoom button that makes the image full-size on your screen except for 3rem on the top for navigation.

**Desktop:**

![Single Product Desktop](https://github.com/karolliszniewski/WordpressTheme-best-home-decor.co.uk/assets/105976690/4fe4c1f6-f8e5-4104-a883-770b1424976f)


## Product Archive
**Desktop:**

![Product Archive Desktop](https://github.com/karolliszniewski/WordpressTheme-best-home-decor.co.uk/assets/105976690/d2b110a3-d427-4f7e-a10d-1988ea224b8d)


## My Account
**Desktop:**

![My Account Desktop](https://github.com/karolliszniewski/WordpressTheme-best-home-decor.co.uk/assets/105976690/16285a8b-0e3a-4e2b-9f3c-655b01023f07)


## My Account / Edit Address
**Desktop:**

![My Account / Edit Address Desktop 1](https://github.com/karolliszniewski/WordpressTheme-best-home-decor.co.uk/assets/105976690/168eae91-0c8e-48ce-84db-a79bf4e17f29)
![My Account / Edit Address Desktop 2](https://github.com/karolliszniewski/WordpressTheme-best-home-decor.co.uk/assets/105976690/31903c1c-a760-4939-96da-dc480f69e2bd)

# Progres 1.4 - Cart

**Desktop:**

![image](https://github.com/karolliszniewski/WordpressTheme-best-home-decor.co.uk/assets/105976690/26ec0207-2ec8-416a-886f-649e9d0d2430)

**Mobile:**

![image](https://github.com/karolliszniewski/WordpressTheme-best-home-decor.co.uk/assets/105976690/87957a8d-5990-49fc-bf9f-4d155b7f6832)


**Progress 1.5 - Navigation update(Basket, Search):**

![chrome-capture-2024-3-2](https://github.com/karolliszniewski/WordpressTheme-best-home-decor.co.uk/assets/105976690/931c0e1a-f995-406f-a8e5-4d345364cf26)
