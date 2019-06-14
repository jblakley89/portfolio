import { Component } from '@angular/core';
import { environment } from '../../environments/environment';

@Component({
    selector: 'app-header',
    templateUrl: './header.component.html',
    styleUrls: ['./header.component.less']
})
export class HeaderComponent {

    book() {
        window.open(environment.bookUrl);
    }    
}