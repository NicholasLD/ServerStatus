import app from 'flarum/common/app';

app.initializers.add('nicholasld/serverstatus', () => {
  console.log('[nicholasld/serverstatus] Hello, forum and admin!');
});
