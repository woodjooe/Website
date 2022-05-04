class overWorld {
    constructor(config){
        this.element =config.element;
        this.canvas =this.element.querySelector(".game-canvas");
        this.ctx =this.canvas.getContext("2d");
        this.map=null;
    }
/*  //timer
    setTimeout(() => {
        hero.sprite.draw(this.ctx);
        npc1.sprite.draw(this.ctx);
        },200)*/
    startGameLoop(){

        const step =() => {
            setTimeout(() => {
            
            //nadhef screen
            this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
            //establish camera
            const cameraPerson=this.map.gameObjects.hero;

            Object.values(this.map.gameObjects).forEach(object => {

                object.update({
                    arrow:this.directionInput.direction,
                    map:this.map,
                },cameraPerson)
            })

            //draw lower layer
            this.map.drawLowerImage(this.ctx,cameraPerson);

            //Draw Game Objects
            
            Object.values(this.map.gameObjects).forEach(object => {
                object.sprite.draw(this.ctx,cameraPerson);
                })

            //draw upper layer
            //this.map.drawUpperImage(this.ctx);
            
            requestAnimationFrame(() =>{
                step();
            })
        },5)
        }

        step();
    }


    init(){
        this.map=new overWorldMap(window.overWorldMap.DemoRoom);

        /*draw the borders... b5olt...
        for(let i=0;i<64;i++){
            for(let j=0;j<64;j++){

            }
        }*/
        console.log(this.map.walls);

        this.map.mountObjects();
        
        this.directionInput=new DirectionInput();
        this.directionInput.init();
        this.directionInput.direction;

        this.startGameLoop();
}
}