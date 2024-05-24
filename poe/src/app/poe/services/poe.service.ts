import { Injectable } from '@angular/core';
import { IService } from '../../core/interfaces/i-service';
import { PoeType } from '../types/poe-type';
import { Observable, map } from 'rxjs';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class PoeService implements IService<PoeType> {
  private readonly endpoint: string = 'http://localhost:3000/poes'

  constructor(
    private _httpClient: HttpClient
  ) { }

  add(item: PoeType): Observable<PoeType> {
    return this._httpClient.post<PoeType>(
      this.endpoint,
      item
    )
  }

  findAll(): Observable<PoeType[]> {
    return this._httpClient.get<PoeType[]>(
      this.endpoint
    )
      .pipe(
        map((poes: PoeType[]) => poes.sort((p1: PoeType, p2: PoeType) => p1.name.localeCompare(p2.name)))
      )
  }
}
