class overWorldMap{
    constructor(config){
        this.gameObjects = config.gameObjects;
        this.walls=config.wall ||{};

        this.lowerImage=new Image();
        this.lowerImage.src = config.lowerSrc;

        this.upperImage=new Image();
        this.upperImage.src = config.upperSrc;    
    }
    drawLowerImage(ctx,cameraPerson) {
        ctx.drawImage(
            this.lowerImage,
            utils.withGrid(25)-cameraPerson.x,
            utils.withGrid(14)-cameraPerson.y)
    }

    drawUpperImage(ctx,cameraPerson) {
        ctx.drawImage(
            this.upperImage,
            utils.withGrid(25)-cameraPerson.x,
            utils.withGrid(14)-cameraPerson.y
            )
    }

    isSpaceTaken(currentX,currentY,direction){
        const {x,y} =utils.nextPosition(currentX,currentY,direction);
        return this.walls[`${x},${y}`] || false;
    }

    mountObjects(){
        Object.values(this.gameObjects).forEach(object =>{
            object.mount(this);
        })
    }
    //
    addWall(x,y){
        this.walls[`${x},${y}`]=true;
    }

    removeWall(x,y){
        delete this.walls[`${x},${y}`]
    }

    moveWall(wasX,wasY,direction){
        this.removeWall(wasX,wasY);
        const{x,y}=utils.nextPosition(wasX,wasY,direction);
        this.addWall(x,y);
    }
}

window.overWorldMap ={
    DemoRoom:{
        lowerSrc:"../../assets/images/maps/libMap.png",
        upperSrc:"../../assets/images/maps/KitchenUpper.png",

        gameObjects:{
            hero:new char({
                x:utils.withGrid(25),
                y:utils.withGrid(14),
                isPlayerControlled:true
            }),
            npc1:new char({
                x:utils.withGrid(12),
                y:utils.withGrid(17),
                src: "../../assets/images/characters/people/npc1.png"
            }),
            npc2:new char({
                x:utils.withGrid(6.5),
                y:utils.withGrid(20.5),
                src: "../../assets/images/characters/people/npc2.png"
            }),
            npc3:new char({
                x:utils.withGrid(16),
                y:utils.withGrid(17),
                src: "../../assets/images/characters/people/npc3.png"
            }),
            Fantasy:new bookType({
                x:utils.withGrid(2),
                y:utils.withGrid(2),
                c:1,
                type:"Fantasy",
                src: "../../assets/images/Characters/box.png"
            }),
            Thriller:new bookType({
                x:utils.withGrid(12),
                y:utils.withGrid(2),
                type:"Thriller",
                src: "../../assets/images/Characters/box.png",
                c:1,
            }),
            History:new bookType({
                x:utils.withGrid(24),
                y:utils.withGrid(2),
                type:"History",
                c:1,
                src: "../../assets/images/Characters/box.png"
            }),
            Philosophy:new bookType({
                x:utils.withGrid(36),
                y:utils.withGrid(2),
                type:"Philosophy",
                c:1,
                src: "../../assets/images/Characters/box.png"
            }),
 
        },
        walls:{
        },
    },
    
}