import { Type } from './type';

describe('Type', () => {
  it('should create an instance', () => {
    expect(new Type()).toBeTruthy();
  })

  it (`Should give an empty string for lastname attribute`, () => {
    const objet = new Type() // Instancie dans type la classe Type

    expect(objet.lastname).toEqual('')
 
  })

  it ('Should give a Date instance for birthdate', () => {
    const objet = new Type()
    expect(objet.birthDate).toBeInstanceOf(Date)
  })

  it ('Should have some default values', () => {
    const type = new Type()
    expect(type.age).toEqual(0)
    expect(type.lastname).toEqual('')
    expect(type.isMale).toBeFalse()
  })

  it ('Should have a date that is today', () => {
    expect(true).toBeTrue()
  })
})
