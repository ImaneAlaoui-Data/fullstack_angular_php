import { Component } from '@angular/core';
import { Intern } from './types/intern.type';
import { InternService } from './services/intern.service';
import { map, take } from 'rxjs';

@Component({
  selector: 'app-home',
  templateUrl: './intern.component.html',
  styleUrl: './intern.component.scss'
})
export class InternComponent {
  /**
   * @var Array<Intern>
   * Array of Intern to be displayed
   */
  interns: Array<Intern> = []
  
  constructor(
    private _service: InternService
  ) {}

  ngOnInit(): void {
    this._service.findAll()
    .pipe(
      take(1),
      map((interns: Intern[]) => {
        return interns.sort((i1: Intern, i2: Intern) => {
          return i1.lastname.localeCompare(i2.lastname)
        })
      })
    )
      .subscribe((interns: Intern[]) => {
        this.interns = interns
      })
  }
}
