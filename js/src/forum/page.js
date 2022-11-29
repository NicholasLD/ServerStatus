import app from 'flarum/forum/app';
import Page from 'flarum/common/components/Page';
import ItemList from 'flarum/common/utils/ItemList';
import listItems from 'flarum/common/helpers/listItems';

export default class ServerStatusPage extends Page {

  view() {
    return (
      <div className="UserDirectoryPage">
        <div className="container">
          <div className="UserDirectoryPage-header">
            <div className="UserDirectoryPage-headerItems">
              <ul>{listItems(this.headerItems().toArray())}</ul>
            </div>
            <div className="UserDirectoryPage-headerSearch">
              <SearchField state={this.state}/>
            </div>
          </div>
          <div className="UserDirectoryPage-list">
            <UserDirectoryList state={this.state}/>
          </div>
        </div>
      </div>
    );
  }
}
