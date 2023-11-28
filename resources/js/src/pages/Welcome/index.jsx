import Rightsvg from "./../../assets/icons/Rightsvg";
import Rightsvg2 from "./../../assets/icons/Rightsvg2";
import Leftsvg from "./../../assets/icons/Leftsvg";
import Leftsvg2 from "./../../assets/icons/Leftsvg2";
import Content from "./Content";
import Contact from "./Contact";
import css from "./css.module.css";

function Welcome() {
    return (
        <div className={css["w-wrapper"]}>
            <div className={css["rightsvg"]}>
                <Rightsvg />
            </div>
            <div className={css["rightsvg2"]}>
                <Rightsvg2 />
            </div>
            <div className={css["leftsvg"]}>
                <Leftsvg />
            </div>
            <div className={css["leftsvg2"]}>
                <Leftsvg2 />
            </div>
            <Content />
            <Contact />
        </div>
    );
}

export default Welcome;