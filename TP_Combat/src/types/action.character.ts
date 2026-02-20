import {getRandomInt} from "../helpers/random-int.helper";
import {Action} from "./action.types";

export class Character {
    public attackSpeed: number;
    public name: string;
    
    protected health: number;
    protected isProtected: boolean = false;
    protected possibleActions: Action[] = [];

    constructor(name: string, speed: number, health: number = 100, actions: Action[] = []) {
        this.name = name;
        this.attackSpeed = speed;
        this.health = health;
        this.possibleActions = actions;
        console.log(`${this.name} a rejoint le combat (PV: ${this.health}, VA: ${this.attackSpeed})`);
    }

    public isAlive(): boolean {
        return this.health > 0;
    }

    public protectSelf(): void {
        this.isProtected = true;
        console.log(`\n🛡️ ${this.name} utilise son bouclier !`);
    }

    public takeDamage(amount: number): void {
        if(this.isProtected){
            console.log(`🛡️ ${this.name} bloque une attaque de ${amount} points de dégâts !`)
            this.isProtected = false;
            return;
        }
        
        this.health -= amount;
        console.log(`${this.name} a pris ${amount} points de dégâts`);

        
        if(!this.isAlive()){
            this.health = 0;
            console.log(`${this.name} est vaincu`);
        }
        else{
            console.log(`${this.name} a ${this.health} points de vie restants`);
        }


    }

    public performTurn(target: Character): void {
        let randomidndex: number;
        let chosenActions;
        if(this.possibleActions.length == null){
            return;
        }

        randomidndex = getRandomInt(0 , (this.possibleActions.length -1))
        chosenActions = this.possibleActions[randomidndex];

        if (chosenActions.type =="defense"){
            this.protectSelf();
            return;
        }

        let minDamage : number = chosenActions.minDamage !=null ? chosenActions.minDamage : 0;
        let maxDamage : number = chosenActions.maxDamage != null  && chosenActions.maxDamage>minDamage ? chosenActions.maxDamage : minDamage;

        let damageinflicted = getRandomInt(minDamage , maxDamage);

        console.log(`${this.name} utilise ${chosenActions.name} sur ${target}`);
        target.takeDamage(damageinflicted);
    }


}