import { Character } from "./action.character";
import { MAGE_ACTIONS } from "../constants/action.constants";

export class Mage extends Character {
    constructor(name: string){
    super(name , 60 , 100, MAGE_ACTIONS)
    }
}