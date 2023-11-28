import img_1 from "../images/Image4.png";

export default function Logo({ width = "86px", height = "99px" }) {
    return <img src={img_1} style={{ width: { width }, height: { height } }} />;
}
