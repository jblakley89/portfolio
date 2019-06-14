import { Component } from '@angular/core';
import * as moment from 'moment';

@Component({
    selector: 'app-home',
    templateUrl: './home.component.html',
    styleUrls: ['./home.component.less']
})
export class HomeComponent {
    birthday = '24 May 1989';
    age = moment().diff(moment('19890524'), 'years');

}
