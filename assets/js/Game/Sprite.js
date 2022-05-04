class Sprite {
    constructor(config) {

        //Set up the image
        this.image=new Image();
        this.image.src=config.src;
        this.image.onload=() =>{
            this.isLoaded =true;
        }

        //Shadow

        this.shadow =new Image();
        this.useShadow = true;
        if (this.useShadow){
            this.shadow.src="../../assets/images/characters/shadow.png";
        }
        this.shadow.onload =() => {
            this.isShadowLoaded = true;
        }
        //Configure Animation and initial State.
        this.animation =config.animation || {
            "idleDown":[
                [0,0]
            ],
            "idleRight":[
                [0,1]
            ],
            "idleUp":[
                [0,2]
            ],
            "idleLeft":[
                [0,3]
            ],
            "walkDown":[
                [1,0],[0,0],[3,0],[0,0]
            ],
            "walkRight":[
                [1,1],[0,1],[3,1],[0,1]
            ],
            "walkUp":[
                [1,2],[0,2],[3,2],[0,2]
            ],
            "walkLeft":[
                [1,3],[0,3],[3,3],[0,3]
            ]
        }
        this.currentAnimation =config.currentAnimation ||"idleDown";
        this.currentAnimationFrame=0;

        this.animationFrameLimit=config.animationFrameLimit || 8;
        this.animationFrameProgress=this.animationFrameLimit;

        // Reference the game object
        this.gameObject=config.gameObject;
    }

    get frame(){
        return this.animation[this.currentAnimation][this.currentAnimationFrame];
    }
    setAnimation(key){
        
        if(this.currentAnimation!==key && key){
            this.currentAnimation=key;
            this.currentAnimationFrame=0;
            this.animationFrameProgress=this.animationFrameLimit;
        }
    }
    updateAnimationProgress(){
        //console.log(this.frame[0],this.frame[1][0]);
        if(this.animationFrameProgress >0){
            this.animationFrameProgress-=1;
            return;
        }
        this.animationFrameProgress=this.animationFrameLimit;
        this.currentAnimationFrame+=1;
        if(this.frame===undefined) {
            this.currentAnimationFrame=0;
        }
        
    }
    draw(ctx,cameraPerson) {
        const x= this.gameObject.x  -8+utils.withGrid(25)-cameraPerson.x;
        const y= this.gameObject.y  -18+utils.withGrid(14)-cameraPerson.y;

        this.isShadowLoaded && ctx.drawImage(this.shadow,
            x,y+2);
        const [frameX,frameY]=this.frame;
        this.isLoaded && ctx.drawImage(this.image,
            frameX*32,frameY*32,
            32,32,
            x,y,
            32,32
            )

            this.updateAnimationProgress();
    }
}