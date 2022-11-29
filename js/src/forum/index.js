import app from 'flarum/forum/app';
import ServerStatusPage from 'flarum/forum';

export { ServerStatusPage };

app.initializers.add('nicholasld_serverstatus', (app) => {
  app.routes.fof_user_directory = {
    path: '/serverstatus',
    component: ServerStatusPage,
  };
});
