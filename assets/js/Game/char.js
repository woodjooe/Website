class char extends GameObject {
    constructor(config){
        super(config);
        this.isPlayerControlled=config.isPlayerControlled || false;
        this.movingProgressRemaining0=16;
        this.movingProgressRemaining=0;
        this.directionUpdate={
            "Up":["y",-1],
            "Down":["y",1],
            "Left":["x",-1],
            "Right":["x",1],
        }
    }
    update(state){
        if(state.arrow!=="A"){
        if(this.isPlayerControlled && state.arrow && this.movingProgressRemaining===0){
            console.log(state.map.isSpaceTaken(this.x,this.y,this.direction));
            console.log("x:"+this.x/16+"y:"+this.y/16);
        }
        if (this.movingProgressRemaining>0){
        this.updatePosition();
        } else {
            if(this.isPlayerControlled && state.arrow){
                this.startBehaviour(state, {
                    type:"walk",
                    direction:state.arrow,
                })
    
            }
            this.updateSprite(state);
        }

    }
    }
    startBehaviour(state,behavior){
        //Set character direction 
        this.direction=behavior.direction;

        if (behavior.type==="walk"){

            if(!state.map.isSpaceTaken(this.x,this.y,this.direction)){


            state.map.moveWall(this.x,this.y,this.direction);
            this.movingProgressRemaining=this.movingProgressRemaining0;
            }
    }
}
    updatePosition(){
            const [property, change]=this.directionUpdate[this.direction];
            this[property]+=change;
            this.movingProgressRemaining -=1;
        
    }
    updateSprite(){
        if(this.isPlayerControlled && this.movingProgressRemaining>0){
            this.sprite.setAnimation("walk"+this.direction);
            return;
        }
        this.sprite.setAnimation("idle"+this.direction);

        /*if(this.isPlayerControlled && this.movingProgressRemaining===0 && !state.arrow){
        this.sprite.setAnimation("idle"+this.direction);
        return;
        }*/

    }
}