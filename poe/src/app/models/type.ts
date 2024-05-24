/**
 * Type testing
 * @author Jean-Luc Aubert <jean-luc.aubert@aelion.fr>
 * @version 1.0.0
 *  - string, number, boolean, array and Date type
 * @version 1.0.1
 *  - Map, Set
 * 
 */
export class Type {
    /**
     * @var {string} lastname of any guy or gal
     */
    public lastname: string = ''

    /**
     * @var { number } age of the cap'tain
     */
    public age: number = 0

    public isMale: boolean = false

    public skills: Array<string> = []

    public madSkills: string[] = []

    public birthDate: Date = new Date()


}
