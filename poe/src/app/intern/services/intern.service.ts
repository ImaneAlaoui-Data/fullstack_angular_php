import { Injectable } from '@angular/core';
import { Intern } from '../types/intern.type';
import { IService } from '../../core/interfaces/i-service';
import { HttpClient } from '@angular/common/http';
import { Observable, map } from 'rxjs';


@Injectable({
  providedIn: 'root'
})
export class InternService implements IService<Intern> {
  private _interns: Array<Intern> = [
    {
      lastname: 'Aubert',
      firstname: 'Jean-Luc'
    },
    {
      lastname: 'Casper',
      firstname: 'Manon'
    }
  ]
  constructor(
    private _httpClient: HttpClient
  ) { }
  
  add(item: Intern): Observable<Intern> {
    return this._httpClient.post<Intern>(
      'http://localhost:3000/interns',
      item
    )
  }

  findAll(): Observable<Intern[]> {
    return this._httpClient.get<Intern[]>(
      'http://localhost:3000/interns'
    )
  }

  get interns(): Array<Intern> {
    return this._interns
  }
}
