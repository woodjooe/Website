const utils ={
    withGrid(n){
        return n*16;
    },
    asGridCoord(x,y) {
        return (x*16).toString()+','+(y*16).toString();
    },
    nextPosition(initialX, initialY, direction) {
        let x = initialX;
        let y = initialY;
        const size = 16;
        if (direction === "Left") { 
          x -= size;
        } else if (direction === "Right") {
          x += size;
        } else if (direction === "Up") {
          y -= size;
        } else if (direction === "Down") {
          y += size;
        }
        return {x,y};
    },
}