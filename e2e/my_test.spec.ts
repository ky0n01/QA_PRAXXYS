import { test, expect , type Locator, type Page } from '@playwright/test';

// test.beforeEach(async ({ page }) => {
//   await page.goto('localhost:8000/login');
// });

test('Login Test', async ({ page }) => {
  await page.goto('localhost:8000/login');
  await expect(page).toHaveTitle("Laravel");
  await page.pause();
  await page.locator('input[type="email"]').click();
  await page.locator('input[type="email"]').press('Control+a');
  await page.locator('input[type="email"]').fill('dubuque.vernon@example.net');
  await page.locator('input[type="password"]').click();
  await page.locator('input[type="password"]').press('Control+a');
  await page.locator('input[type="password"]').fill('password');
  await page.locator('button[type="submit"]').click();
  await page.pause();
  await page.locator('text=Products'); 
});

 


//----------------
// check anchor
// await expect(getStarted).toHaveAttribute'href', '/docs/intro');

// page locator
// const homePage = page.locator('text=TitleOfPage'); 
// await expect(homePage).toHaveAttribute('href', '/docs/intro');
//----------------

// export class PlaywrightDevPage {
//   readonly page: Page;
//   readonly getStartedLink: Locator;
//   readonly gettingStartedHeader: Locator;
//   readonly pomLink: Locator;
//   readonly tocList: Locator;

//   constructor(page: Page) {
//     this.page = page;
//     this.getStartedLink = page.locator('a', { hasText: 'Get started' });
//     this.gettingStartedHeader = page.locator('h1', { hasText: 'Installation' });
//     this.pomLink = page.locator('li', {
//       hasText: 'Guides',
//     }).locator('a', {
//       hasText: 'Page Object Model',
//     });
//     this.tocList = page.locator('article div.markdown ul > li > a');
//   }

//   async goto() {
//     await this.page.goto('localhost:8000/login'); 
//   }

  // async getStarted() {
  //   await this.getStartedLink.first().click();
  //   await expect(this.gettingStartedHeader).toBeVisible();
  // }

  // async pageObjectModel() {
  //   await this.getStarted();
  //   await this.pomLink.click();
  // }
// }