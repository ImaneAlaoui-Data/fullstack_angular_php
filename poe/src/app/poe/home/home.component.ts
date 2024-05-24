import { Component } from '@angular/core';
import { PoeType } from '../types/poe-type';
import { PoeService } from '../services/poe.service';
import { take } from 'rxjs';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrl: './home.component.scss'
})
export class HomeComponent {
  public poes: PoeType[] = []

  constructor(
    private _service: PoeService
  ) {}

  ngOnInit(): void {
    this._service.findAll()
      .pipe(
        take(1)
      )
      .subscribe((poes: PoeType[]) => {
        this.poes = poes
      })
  }
}
