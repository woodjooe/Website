class GameObject {
    constructor(config){
        this.x=config.x || 0;
        this.y=config.y || 0;
        this.direction =config.direction ||"Down";
        this.sprite=new Sprite({
            gameObject: this,
            src: config.src || "../../assets/images/characters/people/hero.png",
              
        });
    }

    mount(map){
        console.log("Mounting !!!");
        this.isMounted=true;
        map.addWall(this.x,this.y);
    }
    update(){

    }
}