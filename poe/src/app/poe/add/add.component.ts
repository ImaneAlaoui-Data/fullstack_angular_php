import { Component } from '@angular/core';
import { FormService } from '../services/form.service';
import { PoeService } from '../services/poe.service';
import { AbstractControl, FormGroup } from '@angular/forms';
import { take } from 'rxjs';
import { Router } from '@angular/router';

@Component({
  selector: 'app-add',
  templateUrl: './add.component.html',
  styleUrl: './add.component.scss'
})
export class AddComponent {

  public form!: FormGroup

  constructor(
    private _formService: FormService,
    private _poeService: PoeService,
    private _router: Router
  ) {}

  ngOnInit(): void {
    this.form = this._formService.getForm()
  }

  public get c(): {[key: string]: AbstractControl} {
    return this.form.controls
  }

  onSubmit() {
    this._poeService.add(this.form.value)
      .pipe(
        take(1)
      )
      .subscribe(() => this._router.navigate(['/', 'poe']))
  }
}
