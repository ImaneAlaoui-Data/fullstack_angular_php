import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { InternComponent } from './intern/intern.component';
import { HomeComponent as PoeHome } from './poe/home/home.component'
import { InternFormComponent } from './intern/intern-form/intern-form.component';
import { AddComponent } from './poe/add/add.component';

const routes: Routes = [
  {
    path: '',
    redirectTo: 'home',
    pathMatch: 'full'
  },
  {
    path: 'home',
    component: InternComponent,
    pathMatch: 'full'
  },
  {
    path: 'intern-add',
    component: InternFormComponent,
    pathMatch: 'full'
  },
  {
    path: 'poe',
    component: PoeHome,
    pathMatch: 'full'
  },
  {
    path: 'poe-add',
    component: AddComponent,
    pathMatch: 'full'
  },
  {
    path: '**',
    redirectTo: 'home',
    pathMatch: 'full'
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
