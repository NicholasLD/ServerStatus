import app from 'flarum/admin/app';

app.initializers.add('nicholasld/serverstatus', () => {
  console.log('[nicholasld/serverstatus] Hello, admin!');
});
