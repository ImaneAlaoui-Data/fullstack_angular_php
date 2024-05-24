import { Injectable } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';

@Injectable({
  providedIn: 'root'
})
export class FormService {

  constructor(
    private _formBuilder: FormBuilder
  ) { }

  getForm(): FormGroup {
    return this._formBuilder.group({
      name: [
        '',
        [
          Validators.required
        ]
      ],
      duration: [
        1,
        [
          Validators.required,
          Validators.min(1)
        ]
      ]
    })
  }
}
