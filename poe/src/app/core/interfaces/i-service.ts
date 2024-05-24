import { Observable } from "rxjs"

/**
 * @interface IService
 *  Define methods to be implemented in services crud class
 * @author Casper the Ghost
 * @version 1.0.0
 *  - add method
 */
export interface IService<T> {
    /**
     * 
     * @param item T any type specialized in your implementation
     * @returns void
     */
    add(item: T): void

    /**
     * Returns an Observable of an array of T
     */
    findAll(): Observable<Array<T>>
}
