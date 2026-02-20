import { Character } from "./action.character";
import { WARRIOR_ACTIONS } from "../constants/action.constants";

export class Warrior extends Character {
    constructor(name: string){
    super(name , 80 , 100, WARRIOR_ACTIONS)
    }
}