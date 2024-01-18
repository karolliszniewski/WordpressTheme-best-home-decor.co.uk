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