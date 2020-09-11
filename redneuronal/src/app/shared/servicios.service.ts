import { Injectable } from '@angular/core';
import { HttpClient } from "@angular/common/http";
import { Observable } from "rxjs";

@Injectable({
  providedIn: 'root'
})
export class ServiciosService {

  constructor(private http: HttpClient) { }

  getEntrada(): Observable<any>{
    return this.http.get('http://localhost:8000/api/entrada');
  }

  getSalida(): Observable<any>{
    return this.http.get('http://localhost:8000/api/salida');
  }

  getconfiguraEntrada(): Observable<any>{
    return this.http.get('http://localhost:8000/api/configuraentrada');
  }

  getconfiguraSalida(): Observable<any>{
    return this.http.get('http://localhost:8000/api/configurasalida');
  }
}
