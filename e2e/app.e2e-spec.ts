import { JoshuablakleyPage } from './app.po';

describe('joshuablakley App', () => {
  let page: JoshuablakleyPage;

  beforeEach(() => {
    page = new JoshuablakleyPage();
  });

  it('should display welcome message', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('Welcome to app!');
  });
});
