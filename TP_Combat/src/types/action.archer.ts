import { Character } from "./action.character";
import { ARCHERS_ACTIONS } from "../constants/action.constants";

export class Archer extends Character {
    constructor(name: string){
    super(name , 50 , 100, ARCHERS_ACTIONS)
    }
}